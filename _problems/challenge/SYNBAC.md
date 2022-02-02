---
{"category_name":"challenge","problem_code":"SYNBAC","problem_name":"(Challenge) Bacteria Synthesis","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":" - 5","source_sizelimit":50000,"problem_author":"alei","problem_tester":null,"date_added":"22-07-2019","tags":{"0":"alei","1":"aug19","2":"challenge","3":"vijju123"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SYNBAC","time":{"view_start_date":1565602202,"submit_start_date":1565602202,"visible_start_date":1565602202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SYNBAC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/AUG19/bengali/SYNBAC.pdf), [Hindi](https://www.codechef.com/download/translated/AUG19/hindi/SYNBAC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/AUG19/mandarin/SYNBAC.pdf), [Russian](https://www.codechef.com/download/translated/AUG19/russian/SYNBAC.pdf), and [Vietnamese](https://www.codechef.com/download/translated/AUG19/vietnamese/SYNBAC.pdf) as well.

Chef Ada always prepares delicious and nutritious dishes. Her secret is to use genetic engineering of bacteria to synthesise proteins. A protein is denoted by a string of uppercase English characters 'A'-'T'; each character represents an amino acid.

The genome of Ada's bacteria is also denoted by a string with length $N$. Each character of this string is 'A', 'C', 'T' or 'G', representing a nucleotide. The nucleotides are also numbered $1$ through $4$ in the same order 'A', 'C', 'T', 'G'. Let's denote the number of a nucleotide $x$ by $n(x)$.

You are given the starting genome $G$ of Ada's bacteria; at any point, all bacteria must have the same genome. You may perform operations of the following types (in any order, any number of times):
- `1 L R`: Reverse the substring between the $L$-th and $R$-th character inclusive ($1 \le L \le R \le N$), i.e. for each $L \le i \lt L+R-i \le R$, swap the $i$-th and $L+R-i$-th nucleotide of the current genome. The cost of this operation is $K + \mathrm{min}\,(L-1, R-L, N-R)$ chefcoins.
- `2 i Y`: Mutate, i.e. change the $i$-th nucleotide of the current genome ($1 \le i \le N$) to the nucleotide $Y$. The cost of this operation is $A + \mathrm{min}\,(i, N+1-i) \cdot B_{n(X), n(Y)}$ chefcoins, where $X$ denotes the $i$-th nucleotide before this mutation.

Each amino acid is encoded by one or more *codons* ― a codon is a string of three nucleotides. Each codon encodes exactly one amino acid. Note that there are $4^3$ different codons and only $20$ amino acids. For each codon, you are given the amino acid it encodes.

A bacteria can produce a protein $P$ with length $L$ amino acids if its genome contains a substring of $3 \cdot L$ nucleotides that can be *translated* to $P$, i.e. split into a sequence of $L$ consecutive substrings $Z_1, Z_2, \ldots, Z_L$ with lengths $3$ such that for each $i$ ($1 \le i \le L$), $Z_i$ is a codon for the $i$-th amino acid (character) of $P$.

For example, let's suppose that codons "ATA" and "TAT" are translated to amino acids 'R' and 'S' respectively. Then, a bacteria with a genome "ATATATA" can produce only the following proteins (the codons used to produce them are marked by brackets):
- "[ATA]TATA" to "R"
- "A[TAT]ATA" to "S"
- "[ATA][TAT]A" to "RS"
- "A[TAT][ATA]" to "SR"

For her next dish, Ada needs $M$ proteins $P_1, P_2, \ldots, P_M$. Her bacteria do not have to produce all proteins, since they can be bought on the market; for each valid $i$, the cost of the protein $P_i$ is $C_i$ chefcoins. However, Ada wants the final bacteria to be able to synthesise at least $50$ of the required proteins.

As her apprentice, your task is to perform some (possibly zero) genetic operations on the initial genome and decide which proteins should be produced from the resulting genome; all other proteins are bought on the market. Your goal is to minimise the total cost (in chefcoins).

### Input
- The first line of the input contains four space-separated integers $N$, $M$, $K$ and $A$.
- $M$ lines follow. For each $i$ ($1 \le i \le M$), the $i$-th of these lines contains a string $P_i$, followed by a space and an integer $C_i$.
- The next line contains a single string $G$ with length $N$.
- Each of the next four lines contains four space-separated integers. For each $i$ and $j$ ($1 \le i, j \le 4$), the $j$-th integer on the $i$-th line is $B_{i, j}$.
- Each of the next $64$ lines contains a single string with length $4$. The first three characters of this string denote a unique codon and the last character denotes the amino acid which it encodes.

### Output
- First, print a line containing two space-separated integers $Q$ ($0 \le Q \le 10^5$) and $U$ ($50 \le U \le M$) ― the number of operations you want to perform and the number of required proteins the final bacteria will produce.
- Then, print $Q$ lines. Each of these lines should contain the description of an operation you want to perform, in the format given above.
- Finally, print $U$ lines. Each of these lines should contain two space-separated integers $i$ and $L$ denoting that the protein $P_i$ can be generated by the substring which starts with the $L$-th character in the final genome. You will receive a Wrong Answer veredict if you print the same $i$ twice.

### Constraints
- $N = 2^{15}$
- $1 \le M \le 2^{12}$
- $K = 2^{13}$
- $A = 2^{13}$
- $0 \le B_{i, j} \le 2^2$ for each valid $i, j$
- $2^{27} \le C_i \le 2^{28}$ for each valid $i$

### Example Input
```
9 3 8192 8192
AB 134217728
BC 134217728
ABC 134217728
ACCATGGAA
0 1 2 3
1 2 3 0
2 3 0 1
3 0 1 2
ACGA
TACB
GTAC
...
[61 codons more]
...
```

### Example Output
```
2 3
1 3 6
2 8 T
1 1
2 4
3 1
```

### Explanation
- The initial genome is "ACCATGGAA".
- In the first operation, the substring "CATG" is reversed: "AC[CATG]GAA" becomes "ACGTACGAA".
- In the second operation, the $8$-th nucleotide ('A') is replaced by 'T': "ACGTACG[A]A" becomes "ACGTACGTA".

Some of the proteins which can be synthesised from the final genome are:
- "AB" from "[ACG][TAC]GTA"
- "BC" from "ACG[TAC][GTA]"
- "ABC" from "[ACG][TAC][GTA]"

### Scoring
The score of a test file is the cost of obtaining all required proteins, i.e. the number of chefcoins you need to pay. The score of a submission is the sum of costs of all test files. Your goal is to minimise the score of your submission.

There are twelve test files. During the contest, the displayed score will account for exactly four test files, i.e. your score reflects your submission's performance on approximately 33.33% (4/12) of the test files; However, if your program gets a non-AC verdict on any test file, your submission's verdict will be non-AC. In other words, an AC verdict denotes that your program runs successfully on all the test files. After the end of the contest, your score will be changed to include the sum of your program's scores over the other 8 test files.

### Test Generation
All translations codon -> amino acid are generated independently from each other. For each codon, the amino acid it encodes is chosen uniformly randomly. $B_{x, y}$ is randomly chosen between $0$ and $2^2$ (inclusive).

To generate the genome $G$, first, a genome $T$ with length $N$ is generated; each nucleotide of this genome is chosen uniformly randomly. Next, each of the proteins $P_1, P_2, \ldots, P_M$ is generated as follows:
- Choose the length $l$ of the protein uniformly randomly between $L_p$ and $R_p$ inclusive.
- Choose a substring $S_p$ in the genome uniformly randomly among all substrings with length $3l$.
- Translate $S_p$ to get the protein $P_i$.
- Choose the cost $C_i$ uniformly randomly between $2^{27}$ and $2^{28}$ inclusive.

Then, the genome $T$ is modified by performing the following operations in this order:
- Mutations: $N_M$ different nucleotides are chosen uniformly randomly. Each of them is changed to a uniformly random (possibly the same) nucleotide, independently from all other changed nucleotides.
- Reversals: $N_R$ times, a substring of the current genome is chosen uniformly randomly and reversed.

The resulting string after these $N_M+N_R$ operations is the genome $G$.

Finally, here is how the remaining parameters are chosen:
- $M$ can be either $2^{10}$ or $2^{12}$.
- $L_p$ and $R_p$ can be either $100$ and $200$ respectively, or $200$ and $300$ respectively.
- $N_M$ and $N_R$ can be either $0$ and $2^{12}$ espectively, $2^{12}-2^7$ and $2^7$ respectively, or $2^{9}$ and $2^{12}-2^9$ respectively.

There is one test file for each combination of the parameters $M$, $L_p$, $R_p$, $N_M$ and $N_R$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>