import { useEffect, useState } from "react";
import { fetchContent } from "../services/api";
import { Button, Col } from "react-bootstrap";

const Contact = () => {
  const [contact, setContact] = useState([]);

  useEffect(() => {
    fetchContent("jsonapi/node/webform/")
      .then((data) => {
        console.log(data);
        setContact(data.data[0]);
      })
      .catch((error) => {
        console.error("error message: ", error);
      });
  }, []);

  return (
    <div className="contact-page d-flex w-100 justify-content-center align-items-center">
      <Col className="d-flex justify-content-center align-items-center">
        {contact && contact.attributes ? (
          <div>
            <form className="contact-form p-5 m-5 bg-own rounded">
              <h2 className="text-center">{contact.attributes.title}</h2>
              <div className="d-flex justify-content-center align-items-center">
                <Col>
                  <input
                    type="text"
                    placeholder="Name"
                    className="m-2 p-2 rounded"
                  ></input>
                  <br></br>
                  <input
                    type="email"
                    placeholder="Email"
                    className="m-2 p-2 rounded"
                  ></input>
                  <br></br>
                  <input
                    type="number"
                    placeholder="Phone Number"
                    className="m-2 p-2 rounded"
                  ></input>
                  <br></br>
                  <textarea
                    placeholder="Message"
                    className="m-2 p-2 rounded"
                  ></textarea>
                  <br></br>
                  <Button type="submit" className=" m-2 p-2 bg-blue">
                    Submit form
                  </Button>
                </Col>
              </div>
            </form>
          </div>
        ) : (
          ""
        )}
      </Col>
    </div>
  );
};

export default Contact;
