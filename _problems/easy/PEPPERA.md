---
{"category_name":"easy","problem_code":"PEPPERA","problem_name":"Chef and Pepperoni Pizza Again","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n2\r\n01\r\n01\r\n4\r\n0111\r\n0001\r\n1010\r\n1010","output":"10\r\n01\r\n1110\r\n0001\r\n1010\r\n1010","explanation":"**Example case 1:** We need to reverse either of the rows, leading to $|p_1-p_2| = 0$. Either of these solutions would be accepted.\r\n\r\n**Example case 2:** It is optimal to reverse the first row, leading to exactly $4$ pepperoni on each side (and $|p_1-p_2| = 0$ again).","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"taran_1407","problem_tester":null,"date_added":"12-02-2020","tags":{"0":"akashbhalotia","1":"cook115","2":"dynamic","3":"easy","4":"knapsack","5":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/PEPPERA","time":{"view_start_date":1582021800,"submit_start_date":1582021800,"visible_start_date":1582021800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PEPPERA","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK115/hindi/PEPPERA.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK115/mandarin/PEPPERA.pdf), [Russian](https://www.codechef.com/download/translated/COOK115/russian/PEPPERA.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK115/vietnamese/PEPPERA.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK115/bengali/PEPPERA.pdf) as well.

Chef is fond of pepperoni pizza, as we saw [here](https://www.codechef.com/problems/PEPPERON). Once again, he has a pepperoni pizza in the shape of a grid with $N$ rows (numbered $1$ through $N$ from top to bottom) and $N$ columns (numbered $1$ through $N$ from left to right). Some cells of this grid contain pepperoni, while other ones do not.

Chef wants to cut the pizza vertically in half and give the two halves to two of his friends. Formally, one friend should get everything in columns $1$ through $N/2$ and the other friend should get everything in the columns $N/2+1$ through $N$.

Before cutting the pizza, Chef may perform the following operation any number of times (including zero): choose an integer $x$ ($1 \le x \le N$) and reverse the $x$-th row of the grid ― in other words, for each valid $i$, the cell in the $i$-th column and $x$-th row is moved to the $N+1-i$-th column in the same row.

After the pizza is cut, let's denote the number of cells containing pepperoni in the first half and in the second half by $p_1$ and $p_2$ respectively. Chef wants to minimise their absolute difference $|p_1-p_2|$, but he is lazy, so he just wants you to perform any valid sequence of operations such that the absolute difference in the final grid is minimized.

You need to find a final grid (the grid after performing all operations) such that $|p_1 - p_2|$ for this grid is the smallest possible. If there are multiple final grids that minimise $|p_1 - p_2|$, you may find any one.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains a string with length $N$ describing the $i$-th row of the grid; for each valid $j$, the $j$-th character of this string is '1' if the cell in the $i$-th row and $j$-th column contains pepperoni or '0' if it does not.

### Output
For each test case, print $N$ lines. For each valid $i$, the $i$-th of these lines should contain a string with length $N$ describing the $i$-th row of the grid after performing all operations, in the same format as on the input. It must be possible to obtain this grid from the initial grid using some valid sequence of operations.

### Constraints
- $1 \le T \le 30$
- $2 \le N \le 150$
- $N$ is even
- the sum of $N$ over all test cases does not exceed $300$

### Example Input
```
2
2
01
01
4
0111
0001
1010
1010
```

### Example Output
```
10
01
1110
0001
1010
1010
```

### Explanation
**Example case 1:** We need to reverse either of the rows, leading to $|p_1-p_2| = 0$. Either of these solutions would be accepted.

**Example case 2:** It is optimal to reverse the first row, leading to exactly $4$ pepperoni on each side (and $|p_1-p_2| = 0$ again).

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>