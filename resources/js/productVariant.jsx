const ProductVariant = () => {
    const el = document.getElementById("product_variants");
    const attributes = JSON.parse(el.dataset.attributes);

    const [variants, setVariants] = React.useState([
        { stock: "", price: "", attributeOptions: [{ options: [] }] },
    ]);

    const handleAddVariant = () => {
        setVariants([
            ...variants,
            { stock: "", price: "", attributeOptions: [{ options: [] }] },
        ]);
    };

    const handleRemoveVariant = (variantIndex) => {
        const filterVariant = variants.filter(
            (_, index) => index !== variantIndex
        );
        setVariants(filterVariant);
    };

    const handleAddAttribute = (variantIndex) => {
        setVariants((prev) =>
            prev.map((variant, i) =>
                i == variantIndex
                    ? {
                          ...variant,
                          attributeOptions: [
                              ...variant.attributeOptions,
                              { options: [] },
                          ],
                      }
                    : variant
            )
        );
    };

    const handleRemoveAttribute = (variantIndex) => {
        setVariants((prev) =>
            prev.map((variant, i) =>
                i == variantIndex
                    ? {
                          ...variant,
                          attributeOptions: variant.attributeOptions.filter(
                              (_, index) => index !== variantIndex
                          ),
                      }
                    : variant
            )
        );
    };

    const handleAttributeOptionsChange = (
        variantIndex,
        attributeOptionIndex,
        attributeId
    ) => {
        const attribute = attributes.find(
            (attribute) => attribute.id == attributeId
        );

        setVariants((prev) =>
            prev.map((variant, i) =>
                i == variantIndex
                    ? {
                          ...variant,
                          attributeOptions: variant.attributeOptions.map(
                              (attributeOption, index) =>
                                  index == attributeOptionIndex
                                      ? {
                                            options:
                                                attribute.product_attribute_options,
                                        }
                                      : attributeOption
                          ),
                      }
                    : variant
            )
        );
    };

    // const handleAttributeOptionsChange = (
    //     variantIndex,
    //     attributeOptionIndex,
    //     attributeId
    // ) => {
    //     const attribute = attributes.find(
    //         (attribute) => attribute.id == attributeId
    //     );
    //     setVariants((prev) =>
    //         prev.map((variant, index) =>
    //             index == variantIndex
    //                 ? {
    //                       ...variant,
    //                       attributeOptions: variant.attributeOptions.map(
    //                           (attributeOption, index) =>
    //                               index == attributeOptionIndex
    //                                   ? {
    //                                         options:
    //                                             attribute.product_attribute_options,
    //                                     }
    //                                   : attributeOption
    //                       ),
    //                   }
    //                 : variant
    //         )
    //     );
    // };

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
                        key={variantIndex}
                        className="card card-flush border border-gray-300 mb-6"
                    >
                        <div className="card-header">
                            <div className="w-full flex items-center justify-between">
                                <div className="card-title">
                                    <h1>Variant {variantIndex + 1}</h1>
                                </div>
                                <button
                                    disabled={variants.length == 1}
                                    onClick={() =>
                                        handleRemoveVariant(variantIndex)
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
                            <div className="w-full flex items-center justify-between mb-3">
                                <div>
                                    <label className="required form-label">
                                        Stock
                                    </label>
                                    <input
                                        type="text"
                                        name={`variants[${variantIndex}][stock]`}
                                        className="form-control w-72 mb-2"
                                        placeholder="Stock"
                                    />
                                </div>
                                <div>
                                    <label className="required form-label">
                                        Price
                                    </label>
                                    <input
                                        type="text"
                                        name={`variants[${variantIndex}][price]`}
                                        className="form-control w-72 mb-2"
                                        placeholder="Price"
                                    />
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
                                                handleAddAttribute(variantIndex)
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
                                    {variant.attributeOptions.map(
                                        (
                                            attributeOption,
                                            attributeOptionIndex
                                        ) => (
                                            <div
                                                key={attributeOptionIndex}
                                                className="flex justify-center items-center gap-3 mb-3"
                                            >
                                                <select
                                                    onChange={(e) =>
                                                        handleAttributeOptionsChange(
                                                            variantIndex,
                                                            attributeOptionIndex,
                                                            e.target.value
                                                        )
                                                    }
                                                    className="form-select"
                                                >
                                                    <option
                                                        value=""
                                                        selected
                                                        disabled
                                                        hidden
                                                    >
                                                        Select Attribute
                                                    </option>

                                                    {attributes.map(
                                                        (attribute, index) => (
                                                            <option
                                                                key={index}
                                                                value={
                                                                    attribute.id
                                                                }
                                                            >
                                                                {attribute.name}
                                                            </option>
                                                        )
                                                    )}
                                                </select>
                                                <select
                                                    name={`variants[${variantIndex}][attributeOptions][]`}
                                                    disabled={
                                                        attributeOption.options
                                                            .length == 0
                                                    }
                                                    className="form-select disabled:cursor-not-allowed cursor-pointer"
                                                >
                                                    {attributeOption.options
                                                        .length == 0 && (
                                                        <option
                                                            value=""
                                                            selected
                                                            disabled
                                                            hidden
                                                        >
                                                            Options
                                                        </option>
                                                    )}
                                                    {attributeOption.options.map(
                                                        (
                                                            option,
                                                            optionIndex
                                                        ) => (
                                                            <option
                                                                key={
                                                                    optionIndex
                                                                }
                                                                value={
                                                                    option.id
                                                                }
                                                            >
                                                                {option.name}
                                                            </option>
                                                        )
                                                    )}
                                                </select>

                                                <button
                                                    disabled={
                                                        variant.attributeOptions
                                                            .length == 1
                                                    }
                                                    onClick={() =>
                                                        handleRemoveAttribute(
                                                            variantIndex
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
                                        )
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

const root = ReactDOM.createRoot(document.getElementById("product_variants"));
root.render(<ProductVariant />);
