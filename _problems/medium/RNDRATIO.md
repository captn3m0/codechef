---
{"category_name":"medium","problem_code":"RNDRATIO","problem_name":"Mysterious Ratio","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n1\r\n1 3\r\n2\r\n2 4\r\n5 5","output":"1\r\n15","explanation":"**Example case 1:** There are three possible scenarios: student $1$ can choose $1$, $2$ or $3$. In all of them, $A = B$, so the expected value is $1$.\r\n\r\n**Example case 2:** There are three possible scenarios:\r\n- Student $1$ chooses $2$, student $2$ chooses $5$: $\\frac{A}{B} = \\frac{2 \\cdot 5}{\\mathrm{gcd}(2, 5)} = 10$.\r\n- Student $1$ chooses $3$, student $2$ chooses $5$: $\\frac{A}{B} = \\frac{3 \\cdot 5}{\\mathrm{gcd}(3, 5)} = 15$.\r\n- Student $1$ chooses $4$, student $2$ chooses $5$: $\\frac{A}{B} = \\frac{4 \\cdot 5}{\\mathrm{gcd}(4, 5)} = 20$.\r\n\r\nThe expected value of the ratio is $\\frac{10+15+20}{3} = 15$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":5,"source_sizelimit":50000,"problem_author":"imanik","problem_tester":null,"date_added":"24-03-2020","tags":{"0":"combinatorics","1":"expected","2":"imanik","3":"inclusion","4":"ltime82","5":"medium","6":"taran_1407"},"problem_difficulty_level":"Medium-Hard","best_tag":"Expected Value","editorial_url":"https://discuss.codechef.com/problems/RNDRATIO","time":{"view_start_date":1585408500,"submit_start_date":1585408500,"visible_start_date":1585408500,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RNDRATIO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME82/hindi/RNDRATIO.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME82/bengali/RNDRATIO.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME82/mandarin/RNDRATIO.pdf), [Russian](https://www.codechef.com/download/translated/LTIME82/russian/RNDRATIO.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME82/vietnamese/RNDRATIO.pdf) as well.

Chef has been teaching probability and expectation in his class. He wants his $N$ students (numbered $1$ through $N$) to play a game so that they could understand the concepts clearly.

For each valid $i$, the $i$-th student should choose an integer from a range $[L_i, R_i]$ uniformly randomly. Chef wants to know the expected value of the ratio $A/B$, where $A$ is the product of the integers chosen by the students and $B$ is the GCD of these integers. Please help him calculate it.

It can be proved that this expected value can be expressed as a fraction $\frac{P}{Q}$, where $P$ and $Q$ are positive integers and $Q$ is coprime with $998,244,353$. You should compute $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $L_i$ and $R_i$.

### Output
For each test case, print a single line containing one integer $P \cdot Q^{-1}$ modulo $998,244,353$.

### Constraints
- $1 \le T \le 2$
- $1 \le N \le 10^5$
- $1 \le L_i \le R_i \le 10^5$ for each valid $i$

### Subtasks
**Subtask #1 (50 points):**
- $N \le 10^3$
- $R_i \le 10^3$ for each valid $i$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
1
1 3
2
2 4
5 5
```

### Example Output
```
1
15
```

### Explanation
**Example case 1:** There are three possible scenarios: student $1$ can choose $1$, $2$ or $3$. In all of them, $A = B$, so the expected value is $1$.

**Example case 2:** There are three possible scenarios:
- Student $1$ chooses $2$, student $2$ chooses $5$: $\frac{A}{B} = \frac{2 \cdot 5}{\mathrm{gcd}(2, 5)} = 10$.
- Student $1$ chooses $3$, student $2$ chooses $5$: $\frac{A}{B} = \frac{3 \cdot 5}{\mathrm{gcd}(3, 5)} = 15$.
- Student $1$ chooses $4$, student $2$ chooses $5$: $\frac{A}{B} = \frac{4 \cdot 5}{\mathrm{gcd}(4, 5)} = 20$.

The expected value of the ratio is $\frac{10+15+20}{3} = 15$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>