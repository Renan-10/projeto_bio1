const btnGenerate = document.querySelector("#generate-pdf");

btnGenerate.addEventListener("click", () => {
    // Conteúdo do PDF
    const content = document.querySelector("#content").innerHTML;
    // Opção selecionada
    const selectedOption = document.querySelector("#inputGroupSelect01").value;

    // Configuração do arquivo final de PDF
    const options = {
        margin: [10, 10, 10, 10],
        filename: "arquivo.pdf",
        html2canvas: { scale: 2 },
        jsPDF: { unit: "mm", format: "a4", orientation: "portrait" },
    };

    // Texto a ser inserido no PDF
    const textToInsert = `${content}\n\ Dados do Paciente:
    - Nome: 
    - Data de Nascimento: 

    Dados do Profissional:
    - Nome do Profissional: 
    - Especialidade: 
    Opção Selecionada: 
    `;

    // Gerar e baixar o PDF
    html2pdf().set(options).from(textToInsert).save();
});