<script>
    class Button2 {
        #label
        #id
        #onClick
        #customClass = " "

        static new() {
            let compo_Button = new Button2();
            return compo_Button;
        }

        setLabel(label) {
            this.#label = label;
            return this;
        }

        setid(id) {
            this.#id = id;
            return this;
        }

        setcustomClass(customClass) {
            this.#customClass = customClass;
            return this;
        }

        #initHtml() {
            const element1 = document.createElement("input");

            element1.setAttribute("type", "button");
            element1.setAttribute("id", this.#id);
            element1.setAttribute("value", this.#label);
            element1.setAttribute("class", this.#customClass);
            element1.onclick = this.#onClick;
            element1.innerHTML = this.#label
            return element1;
        }

        setOnClick(url) {
            this.#onClick = () => {
                window.location.href = url;
            };
            return this;
        }

        appendTo(containerId) {
            document
                .getElementById(containerId)
                .appendChild(this.#initHtml())
        }
    }
</script>