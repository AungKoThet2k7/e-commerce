const el = document.getElementById("product_variants");

if (el && typeof React != "undefined") {
    const ProductVariant = () => {
        const attributes = JSON.parse(el.dataset.attributes);
        const options = JSON.parse(el.dataset.options);
        const errors = JSON.parse(el.dataset.errors);
        const oldData = JSON.parse(el.dataset.old);
        const oldProduct = JSON.parse(el.dataset.product || "{}");
        const data = Object.keys(oldData).length === 0 ? oldProduct : oldData;

        const oldVariantsState = () => {
            return data?.product_variants?.map((variant, i) => ({
                variant_number: i + 1,
                id: variant.id,
                stock: variant.stock ?? "",
                price: variant.price ?? "",
                product_attribute_options: variant?.product_attribute_options
                    ? variant?.product_attribute_options?.map(
                          (attributeOption, index) => {
                              const attributeOptionId =
                                  typeof attributeOption === "object"
                                      ? attributeOption.id
                                      : attributeOption;
                              const currentOption = options.find(
                                  (option) => option.id == attributeOptionId,
                              );

                              return {
                                  id: index + 1,
                                  attributeId:
                                      currentOption.product_attribute_id,
                                  optionId: attributeOptionId,
                              };
                          },
                      )
                    : [{ id: 1, attributeId: "", optionId: "" }],
            }));
        };

        const [variants, setVariants] = React.useState(
            oldVariantsState() ?? [
                {
                    variant_number: 1,
                    id: 1,
                    stock: "",
                    price: "",
                    product_attribute_options: [
                        { id: 1, attributeId: "", optionId: "" },
                    ],
                },
            ],
        );

        console.log(variants);

        const handleAddVariant = () => {
            setVariants([
                ...variants,
                {
                    variant_number:
                        variants.length > 0
                            ? variants[variants.length - 1].variant_number + 1
                            : 1,
                    id:
                        variants.length > 0
                            ? variants[variants.length - 1].id + 1
                            : 1,
                    stock: "",
                    price: "",
                    product_attribute_options: [
                        {
                            id: 1,
                            attributeId: "",
                            optionId: "",
                        },
                    ],
                },
            ]);
        };

        const handleRemoveVariant = (variantId) => {
            const filterVariant = variants.filter(
                (variant, index) => variant.variant_number !== variantId,
            );
            setVariants(filterVariant);
        };

        const handleAddAttribute = (variantId) => {
            setVariants((prev) =>
                prev.map((variant) =>
                    variant.variant_number == variantId
                        ? {
                              ...variant,
                              product_attribute_options: [
                                  ...variant?.product_attribute_options,
                                  {
                                      id:
                                          variant.product_attribute_options
                                              .length > 0
                                              ? variant
                                                    .product_attribute_options[
                                                    variant
                                                        .product_attribute_options
                                                        .length - 1
                                                ].id + 1
                                              : 1,
                                      attributeId: "",
                                      optionId: "",
                                  },
                              ],
                          }
                        : variant,
                ),
            );
        };

        const handleRemoveAttribute = (variantId, attributeOptionId) => {
            setVariants((prev) =>
                prev.map((variant) =>
                    variant.variant_number == variantId
                        ? {
                              ...variant,
                              product_attribute_options:
                                  variant.product_attribute_options.filter(
                                      (attributeOption) =>
                                          attributeOption.id !==
                                          attributeOptionId,
                                  ),
                          }
                        : variant,
                ),
            );
        };

        const handleAttributeChange = (
            variantId,
            attributeOptionId,
            attributeId,
        ) => {
            const selectedAttribute = attributes.find(
                (attribute) => attribute.id == attributeId,
            );

            setVariants((prev) =>
                prev.map((variant) =>
                    variant.variant_number == variantId
                        ? {
                              ...variant,
                              product_attribute_options:
                                  variant.product_attribute_options.map(
                                      (attributeOption) =>
                                          attributeOption.id ==
                                          attributeOptionId
                                              ? {
                                                    ...attributeOption,
                                                    attributeId:
                                                        selectedAttribute.id,
                                                    optionId:
                                                        selectedAttribute
                                                            .product_attribute_options[0]
                                                            .id,
                                                }
                                              : attributeOption,
                                  ),
                          }
                        : variant,
                ),
            );
        };

        const handleOptionChange = (variantId, attributeOptionId, optionId) => {
            setVariants((prev) =>
                prev.map((variant) =>
                    variant.variant_number == variantId
                        ? {
                              ...variant,
                              product_attribute_options:
                                  variant.product_attribute_options.map(
                                      (attributeOption) =>
                                          attributeOption.id ==
                                          attributeOptionId
                                              ? {
                                                    ...attributeOption,
                                                    optionId: optionId,
                                                }
                                              : attributeOption,
                                  ),
                          }
                        : variant,
                ),
            );
        };

        return (
            <>
                <div className="card-header">
                    <div className="w-full flex items-center justify-between">
                        <div className="card-title">
                            <h1>Variants</h1>
                        </div>
                        <button
                            onClick={handleAddVariant}
                            type="button"
                            className="bg-green-500 hover:bg-green-600 text-white p-3 rounded-md flex justify-center items-center"
                        >
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 24 24"
                                width={20}
                                height={20}
                                color="currentColor"
                                fill="none"
                                stroke="currentColor"
                                strokeWidth="1.5"
                                strokeLinecap="round"
                                strokeLinejoin="round"
                            >
                                <path d="M12 4V20M20 12H4" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div className="card-body pt-0">
                    {variants.map((variant, variantIndex) => (
                        <div
                            key={variant.variant_number}
                            className="card card-flush border border-gray-300 mb-6"
                        >
                            <div className="card-header">
                                <div className="w-full flex items-center justify-between">
                                    <div className="card-title">
                                        <h1>Variant {variant.variant_number}</h1>
                                    </div>
                                    <button
                                        disabled={variants.length == 1}
                                        onClick={() =>
                                            handleRemoveVariant(variant.variant_number)
                                        }
                                        type="button"
                                        className="bg-red-500 disabled:cursor-not-allowed hover:bg-red-600 text-white p-3 rounded-md flex justify-center items-center"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 24 24"
                                            width={20}
                                            height={20}
                                            color="currentColor"
                                            fill="none"
                                            stroke="currentColor"
                                            strokeWidth="1.5"
                                            strokeLinecap="round"
                                        >
                                            <path d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5" />
                                            <path d="M3 5.5H21M16.0557 5.5L15.3731 4.09173C14.9196 3.15626 14.6928 2.68852 14.3017 2.39681C14.215 2.3321 14.1231 2.27454 14.027 2.2247C13.5939 2 13.0741 2 12.0345 2C10.9688 2 10.436 2 9.99568 2.23412C9.8981 2.28601 9.80498 2.3459 9.71729 2.41317C9.32164 2.7167 9.10063 3.20155 8.65861 4.17126L8.05292 5.5" />
                                            <path d="M9.5 16.5L9.5 10.5" />
                                            <path d="M14.5 16.5L14.5 10.5" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                            <div className="card-body pt-0">
                                <div className="w-full flex items-start justify-between gap-3 mb-3">
                                    <input
                                        type="number"
                                        name={`product_variants[${variantIndex}][id]`}
                                        defaultValue={variant.id}
                                        hidden
                                    />
                                    <div className=" w-1/2 mb-2">
                                        <label className="required form-label">
                                            Stock
                                        </label>
                                        <input
                                            type="text"
                                            name={`product_variants[${variantIndex}][stock]`}
                                            defaultValue={
                                                variants[variantIndex].variant_number ==
                                                    variant.variant_number &&
                                                variants[variantIndex].stock
                                            }
                                            className="form-control"
                                            placeholder="Stock"
                                        />
                                        {errors[
                                            `product_variants.${variantIndex}.stock`
                                        ] && (
                                            <p className=" text-sm text-red-500 mt-2">
                                                {
                                                    errors[
                                                        `product_variants.${variantIndex}.stock`
                                                    ]
                                                }
                                            </p>
                                        )}
                                    </div>
                                    <div className=" w-1/2 mb-2">
                                        <label className="required form-label">
                                            Price
                                        </label>
                                        <input
                                            type="text"
                                            name={`product_variants[${variantIndex}][price]`}
                                            defaultValue={
                                                variants[variantIndex].variant_number ==
                                                    variant.variant_number &&
                                                variants[variantIndex].price
                                            }
                                            className="form-control"
                                            placeholder="Price"
                                        />
                                        {errors[
                                            `product_variants.${variantIndex}.price`
                                        ] && (
                                            <p className=" text-sm text-red-500 mt-2">
                                                {
                                                    errors[
                                                        `product_variants.${variantIndex}.price`
                                                    ]
                                                }
                                            </p>
                                        )}
                                    </div>
                                </div>

                                <div className="card card-flush py-4 border border-gray-300">
                                    <div className="card-header">
                                        <div className="w-full flex items-center justify-between">
                                            <div className="card-title">
                                                <h1>Attributes</h1>
                                            </div>
                                            <button
                                                onClick={() =>
                                                    handleAddAttribute(
                                                        variant.variant_number,
                                                    )
                                                }
                                                type="button"
                                                className="bg-green-500 hover:bg-green-600 text-white p-3 rounded-md flex justify-center items-center"
                                            >
                                                <svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24"
                                                    width={20}
                                                    height={20}
                                                    color="currentColor"
                                                    fill="none"
                                                    stroke="currentColor"
                                                    strokeWidth="1.5"
                                                    strokeLinecap="round"
                                                    strokeLinejoin="round"
                                                >
                                                    <path d="M12 4V20M20 12H4" />
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                    <div className="card-body pt-0">
                                        {/* show error when ( product_attribute_options required ) validation fail */}
                                        {errors[
                                            `product_variants.${variantIndex}.product_attribute_options`
                                        ] && (
                                            <p className=" text-sm text-red-500 mb-2">
                                                {
                                                    errors[
                                                        `product_variants.${variantIndex}.product_attribute_options`
                                                    ]
                                                }
                                            </p>
                                        )}
                                        {variant?.product_attribute_options?.map(
                                            (
                                                attributeOption,
                                                attributeOptionIndex,
                                            ) => {
                                                const selectedAttributeOptions =
                                                    attributes[
                                                        attributeOption.attributeId -
                                                            1
                                                    ]
                                                        ?.product_attribute_options;

                                                const selectedAttributeId =
                                                    selectedAttributeOptions &&
                                                    selectedAttributeOptions[0]
                                                        .product_attribute_id;

                                                return (
                                                    <div
                                                        key={attributeOption.id}
                                                        className="flex justify-center items-start gap-3 mb-3"
                                                    >
                                                        <div className="w-1/2">
                                                            <select
                                                                value={
                                                                    selectedAttributeId ||
                                                                    ""
                                                                }
                                                                onChange={(e) =>
                                                                    handleAttributeChange(
                                                                        variant.variant_number,
                                                                        attributeOption.id,
                                                                        e.target
                                                                            .value,
                                                                    )
                                                                }
                                                                className="form-select"
                                                            >
                                                                <option
                                                                    value=""
                                                                    disabled
                                                                    hidden
                                                                >
                                                                    Select
                                                                    Attribute
                                                                </option>

                                                                {attributes.map(
                                                                    (
                                                                        attribute,
                                                                        index,
                                                                    ) => (
                                                                        <option
                                                                            key={
                                                                                index
                                                                            }
                                                                            value={
                                                                                attribute.id
                                                                            }
                                                                        >
                                                                            {
                                                                                attribute.name
                                                                            }
                                                                        </option>
                                                                    ),
                                                                )}
                                                            </select>
                                                        </div>
                                                        <div className="w-1/2">
                                                            <select
                                                                name={`product_variants[${variantIndex}][product_attribute_options][]`}
                                                                disabled={
                                                                    attributeOption.attributeId ==
                                                                    ""
                                                                }
                                                                value={
                                                                    attributeOption.optionId ||
                                                                    ""
                                                                }
                                                                onChange={(e) =>
                                                                    handleOptionChange(
                                                                        variant.variant_number,
                                                                        attributeOption.id,
                                                                        e.target
                                                                            .value,
                                                                    )
                                                                }
                                                                className="form-select disabled:cursor-not-allowed cursor-pointer"
                                                            >
                                                                <option
                                                                    value=""
                                                                    disabled
                                                                    hidden
                                                                >
                                                                    Options
                                                                </option>

                                                                {selectedAttributeOptions?.map(
                                                                    (
                                                                        option,
                                                                        optionIndex,
                                                                    ) => (
                                                                        <option
                                                                            key={
                                                                                optionIndex
                                                                            }
                                                                            value={
                                                                                option.id
                                                                            }
                                                                        >
                                                                            {
                                                                                option.name
                                                                            }
                                                                        </option>
                                                                    ),
                                                                )}
                                                            </select>
                                                            {/* show error when ( product_attribute_options.* ) validation fail */}
                                                            {errors[
                                                                `product_variants.${variantIndex}.product_attribute_options.${attributeOptionIndex}`
                                                            ] && (
                                                                <p className=" text-sm text-red-500 mt-2">
                                                                    {
                                                                        errors[
                                                                            `product_variants.${variantIndex}.product_attribute_options.${attributeOptionIndex}`
                                                                        ]
                                                                    }
                                                                </p>
                                                            )}
                                                        </div>

                                                        <button
                                                            disabled={
                                                                variant
                                                                    .product_attribute_options
                                                                    .length == 1
                                                            }
                                                            onClick={() =>
                                                                handleRemoveAttribute(
                                                                    variant.variant_number,
                                                                    attributeOption.id,
                                                                )
                                                            }
                                                            type="button"
                                                            className="bg-red-500 disabled:cursor-not-allowed hover:bg-red-600 text-white p-3 rounded-md flex justify-center items-center"
                                                        >
                                                            <svg
                                                                xmlns="http://www.w3.org/2000/svg"
                                                                viewBox="0 0 24 24"
                                                                width={20}
                                                                height={20}
                                                                color="currentColor"
                                                                fill="none"
                                                                stroke="currentColor"
                                                                strokeWidth="1.5"
                                                                strokeLinecap="round"
                                                            >
                                                                <path d="M19.5 5.5L18.8803 15.5251C18.7219 18.0864 18.6428 19.3671 18.0008 20.2879C17.6833 20.7431 17.2747 21.1273 16.8007 21.416C15.8421 22 14.559 22 11.9927 22C9.42312 22 8.1383 22 7.17905 21.4149C6.7048 21.1257 6.296 20.7408 5.97868 20.2848C5.33688 19.3626 5.25945 18.0801 5.10461 15.5152L4.5 5.5" />
                                                                <path d="M3 5.5H21M16.0557 5.5L15.3731 4.09173C14.9196 3.15626 14.6928 2.68852 14.3017 2.39681C14.215 2.3321 14.1231 2.27454 14.027 2.2247C13.5939 2 13.0741 2 12.0345 2C10.9688 2 10.436 2 9.99568 2.23412C9.8981 2.28601 9.80498 2.3459 9.71729 2.41317C9.32164 2.7167 9.10063 3.20155 8.65861 4.17126L8.05292 5.5" />
                                                                <path d="M9.5 16.5L9.5 10.5" />
                                                                <path d="M14.5 16.5L14.5 10.5" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                );
                                            },
                                        )}
                                    </div>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </>
        );
    };

    const root = ReactDOM.createRoot(
        document.getElementById("product_variants"),
    );
    root.render(<ProductVariant />);
}
