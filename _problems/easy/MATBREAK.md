---
{"category_name":"easy","problem_code":"MATBREAK","problem_name":"Matrix Decomposition","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n3 2","output":511620149,"explanation":"**Example case 1:** ![](https://codechef_shared.s3.amazonaws.com/download/Images/COOK117/MATBREAK/Matbreak.png =500x500)","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rumblefool","problem_tester":null,"date_added":"6-04-2020","tags":{"0":"cook117","1":"exponentiation","2":"implementation","3":"rajarshi_basu","4":"rumblefool","5":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MATBREAK","time":{"view_start_date":1587407402,"submit_start_date":1587407402,"visible_start_date":1587407402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MATBREAK","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK117/hindi/MATBREAK.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK117/mandarin/MATBREAK.pdf), [Russian](https://www.codechef.com/download/translated/COOK117/russian/MATBREAK.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK117/vietnamese/MATBREAK.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK117/bengali/MATBREAK.pdf) as well.

You are given a square matrix $M$ with $N$ rows (numbered $1$ through $N$) and $N$ columns (numbered $1$ through $N$). Initially, all the elements of this matrix are equal to $A$. The matrix is broken down in $N$ steps (numbered $1$ through $N$); note that during this process, some elements of the matrix are simply marked as *removed*, but all elements are still indexed in the same way as in the original matrix. For each valid $i$, the $i$-th step consists of the following:
- Elements $M_{1, N-i+1}, M_{2, N-i+1}, \ldots, M_{i-1, N-i+1}$ are removed.
- Elements $M_{i, N-i+1}, M_{i, N-i+2}, \ldots, M_{i, N}$ are removed.
- Let's denote the product of all $2i-1$ elements removed in this step by $p_i$. Each of the remaining elements of the matrix (those which have not been removed yet) is multiplied by $p_i$.

Find the sum $p_1 + p_2 + p_3 + \ldots + p_N$. Since this number could be very large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains two space-separated integers $N$ and $A$.

### Output
For each test case, print a single line containing one integer ― the sum of products at each step modulo $10^9+7$.

### Constraints
- $1 \le T \le 250$
- $1 \le N \le 10^5$
- $0 \le A \le 10^9$
- the sum of $N$ over all test cases does not exceed $10^5$

### Example Input
```
1
3 2
```

### Example Output
```
511620149
```

### Explanation
**Example case 1:** ![](https://codechef_shared.s3.amazonaws.com/download/Images/COOK117/MATBREAK/Matbreak.png =500x500)

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>