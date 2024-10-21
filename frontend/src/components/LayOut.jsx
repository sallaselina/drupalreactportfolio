import Navbar from "react-bootstrap/Navbar";
import Nav from "react-bootstrap/Nav";
import Container from "react-bootstrap/Container";
import logo from "../assets/header_logo.svg";
import { LinkContainer } from "react-router-bootstrap";
import { Outlet } from "react-router-dom";
import Footer from "./Footer";
import { Image } from "react-bootstrap";

const LayOut = () => {
  return (
    <>
      <Navbar expand="lg">
        <Image src={logo} href="/" className="p-2" />
        <Container>
          <Navbar.Toggle aria-controls="basic-navbar-nav" />
          <Navbar.Collapse id="basic-navbar-nav">
            <Nav>
              <div className="d-flex justify-content-end">
                <LinkContainer to="/">
                  <Nav.Link className="link">Home</Nav.Link>
                </LinkContainer>
                <LinkContainer to="/projects">
                  <Nav.Link>Projects</Nav.Link>
                </LinkContainer>
                <LinkContainer to="/about">
                  <Nav.Link>About</Nav.Link>
                </LinkContainer>
                <LinkContainer to="/contact">
                  <Nav.Link>Contact</Nav.Link>
                </LinkContainer>
              </div>
            </Nav>
          </Navbar.Collapse>
        </Container>
      </Navbar>

      <Outlet />
      <Footer />
    </>
  );
};

export default LayOut;
