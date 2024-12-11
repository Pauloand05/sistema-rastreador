# Guia Simples de Git e GitHub com Branches

Este guia mostra o passo a passo para trabalhar com Git e GitHub, criando branches e colaborando em projetos.

---

## **1. Criando uma nova branch**

```bash
git checkout -b nome-da-branch
```
- Cria e muda para a nova branch chamada `nome-da-branch`.

<br>

## **2. Verificando em qual branch você está**

```bash
git branch
```
- Exibe todas as branches locais e indica a branch ativa com um `*`.

<br>

## **3. Salvando e comitando na branch**

### **O básico para savar as alterações**
```bash
git add .
git commit -m "Descrição do que foi feito"
```
<br>

## **4. Enviando a branch para o repositório remoto**

```bash
git push origin nome-da-branch
```
- Envia a branch do computador-local para o repositório remoto no GitHub.

### Depois daqui, a branch já está no git hub, e pode ser vista e acessada pelos outros colaboradores

<br>
<br>

## **5. Voltando para a branch principal (main)**

```bash
git checkout main
```
- Muda para a branch selecionada: `main`.

<br>

## **6. Atualizando sua branch principal com o remoto**

### **Importante refazer para ver se não tem alguma outra alteração no código**

```bash
git pull origin main
```
- Puxa as alterações mais recentes do repositório remoto para a branch `main`.

---

## **7. Fazendo o merge da branch criada no computador na principal**

### **Etapa 1: Certifique-se de estar na branch principal**
```bash
git checkout main
```

### **Etapa 2: Faça o merge**
```bash
git merge nome-da-branch
```
- Combina as alterações da branch `nome-da-branch` direto na `main`.

---

## **8. Excluindo a branch no computador-local (opcional)**

```bash
git branch -d nome-da-branch
```
- Remove a branch local após o merge (use apenas se ela não for mais necessária).

---

## **9. Excluindo a branch remota-github (opcional)**

```bash
git push origin --delete nome-da-branch
```
- Remove a branch do repositório remoto no GitHub.

---

<br>
<br>

## **Auxiliar Extra**
### **Padrões de commit (convenções):**
- **feat**: Para adicionar uma nova funcionalidade.
```bash
feat: adicionar login com autenticação por google
```
- **fix**: Para corrigir um bug.
```bash
fix: corrigir cálculo do preço de frete
```
- **docs**: Para alterações na documentação.    
```bash
docs: atualizar guia de instalação
```
- **style**: Para mudanças de formatação ou estilo de código (sem impacto funcional)
```bash
style: corrigir espaçamento em components.js
```