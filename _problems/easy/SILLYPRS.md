---
{"category_name":"easy","problem_code":"SILLYPRS","problem_name":"Magda and Silly Pairs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\n3\n4 5 6\n1 2 3\n5\n4 8 6 4 1\n2 5 7 4 7","output":"10\n23","explanation":"**Example case 1:** One possible solution is to pair the first chef with the second chefette, the second chef with the first chefette and the third chef with the third chefette. Their children will have heights $3$, $3$ and $4$, respectively.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"thesitzr","problem_tester":null,"date_added":"22-06-2019","tags":{"0":"ltime73","1":"taran_1407","2":"thesitzr"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1561827602,"submit_start_date":1561827602,"visible_start_date":1561827602,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SILLYPRS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME73/hindi/SILLYPRS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME73/bengali/SILLYPRS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME73/mandarin/SILLYPRS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME73/russian/SILLYPRS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME73/vietnamese/SILLYPRS.pdf) as well.

Chef and his friend Magda have $2N$ mutual friends: $N$ of these friends are chefs and the other $N$ are chefettes. The chefs are numbered $1$ through $N$ and the chefettes are (independently) also numbered $1$ through $N$. Since Magda wants their friends to be as happy as possible and to preserve traditional family values, she wants to pair them up in such a way that each chef is paired with exactly one chefette and each chefette with exactly one chef.

The chefs have heights $A_1, A_2, \ldots, A_N$ and the chefettes have heights $B_1, B_2, \ldots, B_N$. For each valid $i, j$, if the $i$-th chef and the $j$-th chefette are paired, they will have exactly one child with height $\left\lfloor\frac{A_i+B_j}{2}\right\rfloor$. Magda wants to pair up the chefs and chefettes in such a way that the sum of heights of all their children ($N$ children in total) is maximum possible. Please help her do that.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- The third line contains $N$ space-separated integers $B_1, B_2, \ldots, B_N$.

### Output
Print a single line containing one integer ― the maximum sum of heights of the children.

### Constraints
- $1 \le T \le 10$
- $1 \le N \le 10^5$
- $1 \le A_i \le 10^9$ for each valid $i$
- $1 \le B_i \le 10^9$ for each valid $i$

### Subtasks
**Subtask #1 (40 points):** $1 \le N \le 100$

**Subtask #2 (60 points):** original constraints

### Example Input
```
2
3
4 5 6
1 2 3
5
4 8 6 4 1
2 5 7 4 7
```

### Example Output
```
10
23
```

### Explanation
**Example case 1:** One possible solution is to pair the first chef with the second chefette, the second chef with the first chefette and the third chef with the third chefette. Their children will have heights $3$, $3$ and $4$, respectively.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>