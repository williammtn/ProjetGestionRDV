import React from 'react';
import ReactDOM from 'react-dom';
import Carousel from 'react-bootstrap/Carousel';

function CarouselComponent() {
    return (
        <Carousel>
            <Carousel.Item>
                <img
                    className="d-block"
                    src="https://cache.marieclaire.fr/data/photo/w1000_ci/5l/coiffeurs-emblematiques.jpg"
                    alt="First slide"
                    style={{ height: 500, width: "100%" }}
                />
                <Carousel.Caption>
                    <h3>First slide label</h3>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </Carousel.Caption>
            </Carousel.Item>
            <Carousel.Item>
                <img
                    className="d-block"
                    src="https://www.moncoiffeur.fr/thumbnail/hair-salon/2beda268-58ad-47d6-b382-fc09d02ef57f/image/hairSalonImageDetail/resize-ratio/600x/20220812-085438.webp"
                    alt="Second slide"
                    style={{ height: 500, width: "100%" }}
                />

                <Carousel.Caption>
                    <h3>Second slide label</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </Carousel.Caption>
            </Carousel.Item>
            <Carousel.Item>
                <img
                    className="d-block"
                    src="https://medias.bpdm-beaute.com/medium/defaut/coiffure/shamp-coupe-brushing-2.jpg"
                    alt="Third slide"
                    style={{ height: 500, width: "100%" }}
                />

                <Carousel.Caption>
                    <h3>Third slide label</h3>
                    <p>
                        Praesent commodo cursus magna, vel scelerisque nisl consectetur.
                    </p>
                </Carousel.Caption>
            </Carousel.Item>
        </Carousel>
    );
}

export default CarouselComponent;

if (document.getElementById('carousel')) {
    ReactDOM.render(<CarouselComponent />, document.getElementById('carousel'));
}
