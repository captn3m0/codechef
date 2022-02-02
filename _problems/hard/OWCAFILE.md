---
{"category_name":"hard","problem_code":"OWCAFILE","problem_name":"OWCA Files","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"6 11 3\r\n9 8 4 3 5 3","output":"0 27 9 31 28 32 19 15 18 22 15","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":4,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"8-12-2019","tags":{"0":"binary","1":"combinatorics","2":"fast","3":"jan20","4":"kmaaszraa","5":"kmaaszraa","6":"math","7":"primitive","8":"vijju123"},"problem_difficulty_level":"Hard","best_tag":"Fast Fourier Transform","editorial_url":"","time":{"view_start_date":1578907800,"submit_start_date":1578907800,"visible_start_date":1578907800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=OWCAFILE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN20/hindi/OWCAFILE.pdf), [Bengali](https://www.codechef.com/download/translated/JAN20/bengali/OWCAFILE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN20/mandarin/OWCAFILE.pdf), [Russian](https://www.codechef.com/download/translated/JAN20/russian/OWCAFILE.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN20/vietnamese/OWCAFILE.pdf) as well.

Dr.D has broken into O.W.C.A. (The Organization Without A Cool Acronym) in order to find Agent P's reports. He has already found the great vault of O.W.C.A. where Major Monogram keeps the O.W.C.A. files. Unfortunately, the vault is protected by Major Monogram's secret password.

Dr.D knows that Major Monogram has always been fond of $N$ integers $A_1, A_2, \ldots, A_N$ and the password he chose is the product of $K$ of these integers modulo some prime $P$ (since the product itself might become huge and thus hard for him to remember). The integers in the product do not have to correspond to distinct elements of $A$, Major Monogram simply chose $K$ indices $i_1, i_2, \ldots, i_K$ and computed $A_{i_1} \cdot A_{i_2} \cdot \ldots \cdot A_{i_K}$ modulo $P$.

With a lot of effort, Dr.D found out $P$, $K$ and $A$, but he does not know how Major Monogram chose $K$ integers from the sequence $A$. In order to get into the vault, Dr.D has created the Bruteforceinator, which will try all sequences of $K$ valid indices $i_1, i_2, \ldots, i_K$ ($N^K$ sequences in total) and for each of them, compute the product $A_{i_1} \cdot A_{i_2} \cdot \ldots \cdot A_{i_K}$ and try its remainder modulo $P$, instead of just trying all possible passwords from $0$ to $P-1$. The Bruteforceinator keeps trying even after it has tried a correct password and only unlocks the vault after it tries all $N^K$ options.

While the Bruteforceinator is doing its job, Dr.D is wondering how many times it will try each possible password. For each $i$ beween $0$ and $P-1$ (inclusive), find the number of times the Bruteforceinator will try $i$ as the password. Since these numbers may get large, compute them modulo $998,244,353$.

### Input
- The first line of the input contains three space-separated integers $N$, $P$ and $K$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
Print a single line containing $P$ space-separated integers. For each $i$ ($1 \le i \le P$), the $i$-th of these integers should be the number of times the Bruteforceinator will try $i-1$ as the password, modulo $998,244,353$.

### Constraints
- $1 \le N, P \le 259,431$
- $P$ is a prime number
- $0 \le A_i \le P-1$ for each valid $i$
- $0 \le K \le 10^9+9$

### Subtasks
**Subtask #1 (16 points):** $1 \le N \le 400$

**Subtask #2 (84 points):** original constraints

### Example Input
```
6 11 3
9 8 4 3 5 3
```

### Example Output
```
0 27 9 31 28 32 19 15 18 22 15 
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>