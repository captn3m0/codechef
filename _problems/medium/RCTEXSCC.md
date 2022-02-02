---
{"category_name":"medium","problem_code":"RCTEXSCC","problem_name":"Expected Number of SCCs","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2 2 2","output":873463811,"explanation":"The total number of ways to fill the matrix is $16$. We get:\r\n- $1$ SCC with a probability $2/16$\r\n- $2$ SCCs with a probability $12/16$\r\n- $3$ SCCs with a probability $0/16$\r\n- $4$ SCCs with a probability $2/16$\r\n\r\nThe expected number of SCCs is $2/16 + 24/16 + 8/16 = 34/16 = 34 \\cdot 16^{-1} = 873463811$. We can check that indeed, $873463811 \\cdot 16 = 34$ modulo $998244353$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/CitIf168mYk","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":"1 - 3","source_sizelimit":50000,"problem_author":"bthero","problem_tester":"","date_added":"6-12-2020","tags":{"0":"bthero","1":"euler","2":"jan21","3":"medium","4":"probability"},"problem_difficulty_level":"Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/RCTEXSCC","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RCTEXSCC","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JAN21/hindi/RCTEXSCC.pdf), [Bengali](https://www.codechef.com/download/translated/JAN21/bengali/RCTEXSCC.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JAN21/mandarin/RCTEXSCC.pdf), [Russian](https://www.codechef.com/download/translated/JAN21/russian/RCTEXSCC.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JAN21/vietnamese/RCTEXSCC.pdf) as well.

Chef has a matrix $A$ with size $M \times N$. He wants to fill each of its cells with a random integer between $1$ and $K$ (inclusive); these integers are independent.

Then, Chef builds a directed graph on this matrix: for each ordered pair of side-adjacent cells of the matrix such that the value in the first cell is greater than or equal to the value in the second cell, he adds an edge from the first cell to the second cell.

Find the expected value of the number of strongly connected components (SCC) in this graph. It can be proved that the answer can be represented as a fraction $P/Q$, where $P$ and $Q$ are positive integers and $Q$ is coprime with $998,244,353$. You should compute $P \cdot Q^{-1}$ modulo $998,244,353$, where $Q^{-1}$ denotes the multiplicative inverse of $Q$ modulo $998,244,353$.

### Input
- The first and only line of the input contains three space-separated integers $M$, $N$ and $K$.

### Output
Print a single line containing one integer $P \cdot Q^{-1}$ modulo $998,244,353$.

### Constraints
- $1 \le M \le 2$
- $1 \le N \le 10^5$
- $1 \le K \le 10^8$

### Subtasks
**Subtask #1 (5 points, time limit 1s):**
- $N \le 4$
- $K \le 5$ 

**Subtask #2 (10 points, time limit 2s):** $M = 1$

**Subtask #3 (10 points, time limit 2s):**
- $M = 2$
- $N \le 500$
- $K \le 500$

**Subtask #4 (75 points, time limit 3s):** original constraints

### Example Input
```
2 2 2
```

### Example Output
```
873463811
```

### Explanation
The total number of ways to fill the matrix is $16$. We get:
- $1$ SCC with a probability $2/16$
- $2$ SCCs with a probability $12/16$
- $3$ SCCs with a probability $0/16$
- $4$ SCCs with a probability $2/16$

The expected number of SCCs is $2/16 + 24/16 + 8/16 = 34/16 = 34 \cdot 16^{-1} = 873463811$. We can check that indeed, $873463811 \cdot 16 = 34$ modulo $998244353$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>