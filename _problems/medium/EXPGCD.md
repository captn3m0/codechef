---
{"category_name":"medium","problem_code":"EXPGCD","problem_name":"Expected GCD","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3 2\n1\n2\n4","output":"0\n1\n166666669","explanation":"In the first query, it is impossible to cook a dish with two ingredients if $N = 1$.\n\nIn the second query, Chef can cook two dishes: $(1, 2)$ and $(2, 1)$. The tastiness of each of these dishes is $1$, so the expected value of tastiness is $1$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kharyusuf","problem_tester":null,"date_added":"31-07-2019","tags":{"0":"anand20","1":"combinatorics","2":"dynamic","3":"inclusion","4":"kharyusuf","5":"mobius","6":"number","7":"sept19"},"problem_difficulty_level":"Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/EXPGCD","time":{"view_start_date":1568626202,"submit_start_date":1568626202,"visible_start_date":1568626202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=EXPGCD","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT19/hindi/EXPGCD.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT19/bengali/EXPGCD.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT19/mandarin/EXPGCD.pdf), [Russian](https://www.codechef.com/download/translated/SEPT19/russian/EXPGCD.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT19/vietnamese/EXPGCD.pdf) as well.

Chef loves to make dishes. Currently, he has $N$ ingredients (numbered $1$ through $N$) which he can use to cook various dishes.

To make a dish, Chef must use exactly $K$ ingredients in a correct order. Therefore, a dish is a sequence of $K$ distinct integers between $1$ and $N$. The tastiness of that dish is defined as the GCD of these integers (all the ingredients in that dish). Chef wants to choose a dish uniformly randomly and cook it.

You should answer $Q$ queries. $K$ is the same for all queries. In each query, you are given $N$ and you should find the expected value of the tastiness of Chef's dish or determine that Chef cannot cook any dish.

If Chef can cook at least one dish, it can be proven that this expected value is a fraction in the form $P/D$, where $P$ and $D$ are coprime positive integers and $D$ is coprime with $10^9+7$. You should compute $P \cdot D^{-1}$ modulo $10^9+7$, where $D^{-1}$ denotes the multiplicative inverse of $D$ modulo $10^9+7$.

### Input
- The first line of the input contains two space-separated integers $Q$ and $K$.
- Each of the next $Q$ lines contains a single integer $N$ describing a query.

### Output
- For each query, print a single line containing one integer ― $P \cdot D^{-1}$ modulo $10^9+7$, or $0$ if Chef cannot cook any dish.

### Constraints
- $1 \le Q, N \le 2 \cdot 10^5$
- $2 \le K \le 10^5$

### Subtasks
**Subtask #1 (10 points):**
- $K = 2$ 
- $1 \le N \le 1,000$

**Subtask #2 (15 points):** $K = 2$

**Subtask #3 (75 points):** original constraints

### Example Input
```
3 2
1
2
4
```

### Example Output
```
0
1
166666669
```

### Explanation
In the first query, it is impossible to cook a dish with two ingredients if $N = 1$.

In the second query, Chef can cook two dishes: $(1, 2)$ and $(2, 1)$. The tastiness of each of these dishes is $1$, so the expected value of tastiness is $1$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>