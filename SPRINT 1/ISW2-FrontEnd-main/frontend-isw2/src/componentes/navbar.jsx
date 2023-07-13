import '../estilos/css/navbar.css';
import { FontAwesomeIcon } from '@fortawesome/react-fontawesome'
import { faFacebook,faInstagram,faTiktok } from '@fortawesome/free-brands-svg-icons'
//eslint-disable-next-line
const Navbar = ()=>{
    return(
        <div>
            <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>

<div class="wrapper">
    <div class="sidebar">
        <h2 className='Logo'>Estudiando.pe</h2>
        <ul>
            <li><a href="/PaginaPrincipal"><i class="fas fa-home"></i>Pagina Principal</a></li>
            <li><a href="/Register"><i class="fas fa-user"></i>Profile</a></li>
            <li><a href="/VerCursos"><i class="fas fa-address-card"></i>Cursos</a></li>
            <li><a href="#"><i class="fas fa-project-diagram"></i>Solicitar ayuda</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Rankings</a></li>
            <li><a href="#"><i class="fas fa-address-book"></i>Contact</a></li>
        </ul> 
        <div class="social_media">
            <a href="https://www.facebook.com"><FontAwesomeIcon icon={faFacebook} /></a>
            <a hrer="https://www.instagram.com"><FontAwesomeIcon icon={faInstagram} /></a>
            <a href="https://www.tiktok.com"><FontAwesomeIcon icon={faTiktok} /></a>
        </div>
    </div>
</div>
        </div>
    )
}
export default Navbar