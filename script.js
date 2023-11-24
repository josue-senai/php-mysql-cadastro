const rolesInput = document.getElementsByName('role-options')

rolesInput.forEach((input) => {
    input.addEventListener('change', () => {
        const form = document.querySelector('.dados')
        form.innerHTML = ''

        form.appendChild(document.createElement('label')).textContent = 'nome'
        const nome = form.appendChild(document.createElement('input'))
        nome.type = 'text'
        nome.id = 'nome'
        nome.name = 'nome'

        form.appendChild(document.createElement('label')).textContent = 'telefone'
        const telefone = form.appendChild(document.createElement('input'))
        telefone.type = 'text'
        telefone.id = 'telefone'
        telefone.name = 'telefone'

        if (input.id == 'paciente') {
            form.appendChild(document.createElement('label')).textContent = 'Data de nascimento'
            const dataNasc = form.appendChild(document.createElement('input'))
            dataNasc.type = 'date'
            dataNasc.id = 'data-nasc'
            dataNasc.name = 'data-nasc'

            form.appendChild(document.createElement('label')).textContent = 'genero'
            const genero = form.appendChild(document.createElement('input'))
            genero.type = 'text'
            genero.id = 'genero'
            genero.name = 'genero'

            form.appendChild(document.createElement('label')).textContent = 'endereco'
            const endereco = form.appendChild(document.createElement('input'))
            endereco.type = 'text'
            endereco.id = 'endereco'
            endereco.name = 'endereco'

            form.appendChild(document.createElement('label')).textContent = 'historico'
            const historico = form.appendChild(document.createElement('input'))
            historico.type = 'text'
            historico.id = 'historico'
            historico.name = 'historico'
        } else if (input.id == 'medico' || input.id == 'enfermeiro') {
            form.appendChild(document.createElement('label')).textContent = 'especialidade'
            const especialidade = form.appendChild(document.createElement('input'))
            especialidade.type = 'text'
            especialidade.id = 'especialidade'
            especialidade.name = 'especialidade'

            form.appendChild(document.createElement('label')).textContent = 'Email'
            const email = form.appendChild(document.createElement('input'))
            email.type = 'email'
            email.id = 'email'
            email.name = 'email'
        }

        const submit = form.appendChild(document.createElement('input'))
        submit.type = 'submit'
        submit.id = 'submit'
        submit.value = 'Cadastrar'
        submit.name = 'submit'
    })
})