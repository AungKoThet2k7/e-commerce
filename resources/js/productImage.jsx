const el = document.getElementById("product_images");

if (el && typeof React != "undefined") {
    const ProductImage = () => {

        const {image, main_image, image_description} = JSON.parse(el.dataset.labels);

        const [selectedImages, setSelectedImages] = React.useState([]);
        const [defaultIndex, setDefaultIndex] = React.useState(0);
        const fileInputRef = React.useRef(null);

        const handleImageChange = (e) => {
            const files = Array.from(e.target.files);
            const filePreviews = files.map((file, index) => ({
                file,
                preview: URL.createObjectURL(file),
            }));
            setSelectedImages([...selectedImages, ...filePreviews]);
            setDefaultIndex(0);
        };

        const handelImageDelete = (index) => {
            const images = selectedImages.filter((_, i) => i !== index);
            setSelectedImages(images);
            if (index === defaultIndex) {
                setDefaultIndex(0);
            } else if (index < defaultIndex) {
                setDefaultIndex(defaultIndex - 1);
            }
        };

        React.useEffect(() => {
            if (fileInputRef.current) {
                const dataTransfer = new DataTransfer();
                selectedImages.forEach((img) => {
                    dataTransfer.items.add(img.file);
                });
                fileInputRef.current.files = dataTransfer.files;
            }
        }, [selectedImages]);

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
                        name="images[]"
                        accept=".png, .jpg, .jpeg"
                        onChange={handleImageChange}
                        className="form-control"
                    />
                    <input
                        type="number"
                        name="default_image"
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
                                    className={`min-w-[100px] group relative p-2 border-2 rounded-lg ${defaultIndex === index ? "border-blue-500 bg-blue-50" : "border-gray-200"}`}
                                    onClick={() => setDefaultIndex(index)}
                                >
                                    <img
                                        src={img.preview}
                                        className="object-cover aspect-square rounded-md"
                                    />

                                    <button
                                        type="button"
                                        onClick={(e) => {
                                            e.stopPropagation();
                                            handelImageDelete(index);
                                        }}
                                        className="absolute top-0 right-0 flex items-center justify-center text-center rounded-lg bg-white drop-shadow p-0.5"
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
                                                className=" fill-red-500"
                                            ></rect>
                                            <rect
                                                x="7.41422"
                                                y="6"
                                                width="16"
                                                height="2"
                                                rx="1"
                                                transform="rotate(45 7.41422 6)"
                                                fill="currentColor"
                                                className="fill-red-500"
                                            ></rect>
                                        </svg>
                                    </button>

                                    {defaultIndex === index && (
                                        <span className="absolute bottom-0 left-0 bg-blue-500 text-white text-[10px] px-2 py-1 rounded-tr-lg">
                                            {main_image}
                                        </span>
                                    )}
                                </div>
                            ))
                        )}
                    </div>
                </div>
            </>
        );
    };

    const root = ReactDOM.createRoot(document.getElementById("product_images"));
    root.render(<ProductImage />);
}
