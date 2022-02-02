---
{"category_name":"easy","problem_code":"PEPPERON","problem_name":"Chef and Pepperoni Pizza","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n6\r\n100000\r\n100000\r\n100000\r\n100000\r\n010010\r\n001100\r\n4\r\n0011\r\n1100\r\n1110\r\n0001","output":"2\r\n0","explanation":"**Example case 1:** Initially, $|p_1-p_2| = 4$, but if Chef reverses any one of the first four rows from \u0022100000\u0022 to \u0022000001\u0022, $|p_1-p_2|$ becomes $2$.\r\n\r\n**Example case 2:** Initially, $|p_1-p_2| = 0$. We cannot make that smaller by reversing any row.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"erfaniaa","problem_tester":null,"date_added":"16-08-2019","tags":{"0":"cook109","1":"erfaniaa","2":"inclusion","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"Inclusion Exclusion","editorial_url":"https://discuss.codechef.com/problems/PEPPERON","time":{"view_start_date":1566153002,"submit_start_date":1566153002,"visible_start_date":1566153002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PEPPERON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK109/hindi/PEPPERON.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK109/mandarin/PEPPERON.pdf), [Russian](https://www.codechef.com/download/translated/COOK109/russian/PEPPERON.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK109/vietnamese/PEPPERON.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK109/bengali/PEPPERON.pdf) as well.

Chef has a pepperoni pizza in the shape of a $N \times N$ grid; both its rows and columns are numbered $1$ through $N$. Some cells of this grid have pepperoni on them, while some do not. Chef wants to cut the pizza vertically in half and give the two halves to two of his friends. Formally, one friend should get everything in the columns $1$ through $N/2$ and the other friend should get everything in the columns $N/2+1$ through $N$.

Before doing that, if Chef wants to, he may choose one row of the grid and reverse it, i.e. swap the contents of the cells in the $i$-th and $N+1-i$-th column in this row for each $i$ ($1 \le i \le N/2$).

After the pizza is cut, let's denote the number of cells containing pepperonis in one half by $p_1$ and their number in the other half by $p_2$. Chef wants to minimise their absolute difference. What is the minimum value of $|p_1-p_2|$?

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a string with length $N$ describing the $i$-th row of the grid; this string contains only characters '1' (denoting a cell with pepperonis) and '0' (denoting a cell without pepperonis).

### Output
For each test case, print a single line containing one integer — the minimum absolute difference between the number of cells with pepperonis in the half-pizzas given to Chef's friends.

### Constraints
- $1 \le T \le 1,000$
- $2 \le N \le 1,000$
- $N$ is even
- the sum of $N \cdot N$ over all test cases does not exceed $2 \cdot 10^6$

### Example Input
```
2
6
100000
100000
100000
100000
010010
001100
4
0011
1100
1110
0001
```

### Example Output
```
2
0
```

### Explanation
**Example case 1:** Initially, $|p_1-p_2| = 4$, but if Chef reverses any one of the first four rows from "100000" to "000001", $|p_1-p_2|$ becomes $2$.

**Example case 2:** Initially, $|p_1-p_2| = 0$. We cannot make that smaller by reversing any row.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>