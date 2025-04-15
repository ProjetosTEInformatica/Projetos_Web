// Criando o módulo da aplicação
var app = angular.module("MeuApp", []);

// Criando o controller
app.controller("MeuController", function ($scope) {
    $scope.nomes = ["Ana", "Bruno", "Carlos"];

    // Função para adicionar um nome à lista
    $scope.adicionarNome = function () {
        if ($scope.novoNome) {
            $scope.nomes.push($scope.novoNome);
            $scope.novoNome = ""; // Limpar o campo após adicionar
        }
    };

    // Função para remover um nome da lista
    $scope.removerNome = function (index) {
        $scope.nomes.splice(index, 1);
    };
});
