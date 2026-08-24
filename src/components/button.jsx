import React from "react";

export function Button({ name, onClick }) {
    return (
        <button
            className="text-white font-bold py-2 px-4 rounded bg-accent hover:bg-accent-dark cursor-pointer"
            onClick={onClick}
        >
            {name}
        </button>
    )
}

export function ButtonOutlined({ name, onClick }) {
    return (
        <button
            className="text-white font-bold py-2 px-4 rounded border-2 border-accent hover:bg-accent-dark hover:border-accent-dark cursor-pointer"
            onClick={onClick}
        >
            {name}
        </button>
    )
}