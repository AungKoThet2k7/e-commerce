const el = document.getElementById("product_images");

if (el && typeof React != "undefined") {
    const ProductImage = () => {
        const { image, main_image, image_description } = JSON.parse(
            el.dataset.labels,
        );

        const [selectedImages, setSelectedImages] = React.useState([]);
        const [defaultIndex, setDefaultIndex] = React.useState(0);
        const [editImage, setEditImage] = React.useState(null);

        const fileInputRef = React.useRef(null);

        const handleImageChange = (e) => {
            const files = Array.from(e.target.files);
            const filePreviews = files.map((file, index) => ({
                id: selectedImages.length + index + 1,
                file,
                preview: URL.createObjectURL(file),
                alt_text: "",
            }));
            setSelectedImages([...selectedImages, ...filePreviews]);
        };

        const handelImageDelete = (index) => {
            const images = selectedImages.filter((_, i) => i !== index);
            setSelectedImages(images);
            // if (index === defaultIndex) {
            //     setDefaultIndex(0);
            // } else if (index < defaultIndex) {
            //     setDefaultIndex(defaultIndex - 1);
            // }
        };

        React.useEffect(() => {
            if (fileInputRef.current) {
                const dataTransfer = new DataTransfer();
                selectedImages.map((img) => {
                    dataTransfer.items.add(img.file);
                });
                fileInputRef.current.files = dataTransfer.files;
            }
        }, [selectedImages]);

        const handleImageAltChange = () => {
            setSelectedImages((prev) =>
                prev.map((img) =>
                    img.id === editImage.id
                        ? { ...img, alt_text: editImage.alt_text }
                        : img,
                ),
            );
            setEditImage(null);
        };

        return (
            <>
                <div className="card-header">
                    <div className="card-title">
                        <h2>{image}</h2>
                    </div>
                </div>
                <div className="card-body text-center py-0">
                    <input
                        ref={fileInputRef}
                        type="file"
                        multiple
                        accept=".png, .jpg, .jpeg"
                        onChange={handleImageChange}
                        className="form-control"
                    />

                    <input
                        type="number"
                        name={`default_img_index`}
                        value={defaultIndex}
                        readOnly
                        hidden
                    />
                    <div className="max-h-[320px] overflow-y-auto grid grid-cols-3 gap-3 mt-4">
                        {selectedImages.length === 0 ? (
                            <div className="col-span-full h-[320px] flex flex-col items-center justify-center bg-white border-2 border-dashed border-gray-200 drop-shadow p-10 rounded-lg">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="195 216.944 511.001 468.43"
                                    width="100"
                                    height="100"
                                >
                                    <g
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="#DCE5F1"
                                        clipPath="url(#clip0_616_6)"
                                    >
                                        <path d="M328.063 589.559c-34.086 0-64.407-21.825-75.417-54.317l-.744-2.448c-2.597-8.604-3.685-15.84-3.685-23.08V364.541l-51.654 172.425c-6.643 25.361 8.496 51.654 33.896 58.66l329.242 88.173a48.9 48.9 0 0 0 12.266 1.575c21.205 0 40.581-14.074 46.012-34.815l19.182-61zM386.618 365.991c23.486 0 42.582-19.099 42.582-42.585s-19.096-42.586-42.582-42.586-42.586 19.1-42.586 42.586 19.1 42.585 42.586 42.585" />
                                        <path d="M652.768 216.944H333.385c-29.338 0-53.229 23.891-53.229 53.233v234.211c0 29.342 23.891 53.233 53.229 53.233h319.383c29.342 0 53.233-23.891 53.233-53.233V270.177c0-29.342-23.891-53.233-53.233-53.233m-319.383 42.585h319.383c5.879 0 10.647 4.768 10.647 10.648V421.33l-67.26-78.485c-7.135-8.367-17.463-12.839-28.555-13.092-11.029.062-21.376 4.959-28.445 13.435l-79.081 94.918-25.763-25.7c-14.562-14.562-38.262-14.562-52.804 0l-58.766 58.746V270.177c0-5.88 4.769-10.648 10.644-10.648" />
                                    </g>
                                </svg>
                                <p className="mt-4 text-gray-500">
                                    {image_description}
                                </p>
                            </div>
                        ) : (
                            selectedImages.map((img, index) => (
                                <div
                                    key={index}
                                    className={`w-[130px] group relative p-2 border-2 rounded-lg ${defaultIndex == index ? "border-blue-500 bg-blue-50" : "border-gray-200"}`}
                                    onClick={() => setEditImage(img)}
                                >
                                    <img
                                        src={img.preview}
                                        alt={img.alt_text}
                                        className="object-cover aspect-square rounded-md"
                                    />

                                    <input
                                        type="file"
                                        name={`image[${index}][file]`}
                                        ref={(e) => {
                                            if (e) {
                                                const dataTransfer =
                                                    new DataTransfer();
                                                dataTransfer.items.add(
                                                    img.file,
                                                );
                                                e.files = dataTransfer.files;
                                            }
                                        }}
                                        hidden
                                    />
                                    <input
                                        type="text"
                                        name={`image[${index}][alt_text]`}
                                        value={img.alt_text}
                                        readOnly
                                        hidden
                                    />

                                    <button
                                        type="button"
                                        onClick={(e) => {
                                            e.stopPropagation();
                                            handelImageDelete(index);
                                        }}
                                        className="group/delete absolute top-0 right-0 flex items-center justify-center text-center rounded-lg bg-white hover:!bg-red-50 drop-shadow p-0.5"
                                    >
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="20"
                                            height="20"
                                            viewBox="0 0 24 24"
                                            fill="none"
                                        >
                                            <rect
                                                opacity="0.5"
                                                x="6"
                                                y="17.3137"
                                                width="16"
                                                height="2"
                                                rx="1"
                                                transform="rotate(-45 6 17.3137)"
                                                fill="currentColor"
                                                className="fill-gray-500 group-hover/delete:fill-red-500"
                                            ></rect>
                                            <rect
                                                x="7.41422"
                                                y="6"
                                                width="16"
                                                height="2"
                                                rx="1"
                                                transform="rotate(45 7.41422 6)"
                                                fill="currentColor"
                                                className="fill-gray-500 group-hover/delete:fill-red-500"
                                            ></rect>
                                        </svg>
                                    </button>

                                    {defaultIndex == index ? (
                                        <span className="absolute bottom-1 left-1 flex items-center gap-1 rounded bg-blue-500 px-1.5 py-0.5 text-[9px] text-white backdrop-blur-sm">
                                            {main_image}
                                        </span>
                                    ) : (
                                        <button
                                            type="button"
                                            onClick={(e) => {
                                                e.stopPropagation();
                                                setDefaultIndex(index);
                                            }}
                                            className="absolute bottom-1 left-1 opacity-0 group-hover:!opacity-100 translate-y-1 group-hover:translate-y-0 duration-200 flex items-center gap-1 rounded bg-blue-500 px-1.5 py-0.5 text-[9px] text-white backdrop-blur-sm"
                                        >
                                            Set As Main
                                        </button>
                                    )}
                                    {!img.alt_text && (
                                        <span className="absolute bottom-1 right-1 flex items-center gap-1 rounded bg-amber-500 px-1.5 py-0.5 text-[9px] text-white backdrop-blur-sm">
                                            ! Alt
                                        </span>
                                    )}
                                </div>
                            ))
                        )}
                    </div>
                    {editImage && (
                        <div className="mt-4 card border border-gray-300">
                            <div className=" flex gap-3 items-center justify-center p-3">
                                <div className=" w-24 ">
                                    <img
                                        src={editImage.preview}
                                        className="w-full aspect-square object-cover rounded-md"
                                        alt={editImage.alt_text}
                                    />
                                </div>
                                <div className="flex-1">
                                    <h5 className="text-start text-gray-900">
                                        Image Alt Text
                                    </h5>
                                    <input
                                        type="text"
                                        className="form-control text-gray-900 mt-3"
                                        placeholder="Image Alt Text"
                                        value={editImage.alt_text}
                                        onChange={(e) =>
                                            setEditImage({
                                                ...editImage,
                                                alt_text: e.target.value,
                                            })
                                        }
                                        onKeyDown={(e) => {
                                            if (e.key === "Enter") {
                                                handleImageAltChange();
                                            }
                                        }}
                                    />
                                    <div className="flex justify-end gap-2 mt-3">
                                        <button
                                            type="button"
                                            onClick={() => setEditImage(null)}
                                            className="btn btn-sm btn-outline-primary btn-active-primary"
                                        >
                                            Cancel
                                        </button>
                                        <button
                                            type="button"
                                            onClick={handleImageAltChange}
                                            className="btn btn-sm btn-primary"
                                        >
                                            Save
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    )}
                </div>
            </>
        );
    };

    const root = ReactDOM.createRoot(document.getElementById("product_images"));
    root.render(<ProductImage />);
}
