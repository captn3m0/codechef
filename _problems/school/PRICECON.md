---
{"category_name":"school","problem_code":"PRICECON","problem_name":"Chef and Price Control","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n5 4\r\n10 2 3 4 5\r\n7 15\r\n1 2 3 4 5 6 7\r\n5 5\r\n10 9 8 7 6","output":"7\r\n0\r\n15","explanation":"**Test Case 1**: The initial revenue is $10 + 2 + 3 + 4 + 5 = 24$. Because of the price ceiling, $P_1$ decreases from $10$ to $4$ and $P_5$ decreases from $5$ to $4$. The revenue afterwards is $4 + 2 + 3 + 4 + 4 = 17$ and the lost revenue is $24 - 17 = 7$.\r\n\r\n**Test Case 2**: The initial revenue is $1 + 2 + 3 + 4 + 5 + 6 + 7 = 28$. For each valid $i$, $P_i \\le 15$, so there are no changes, the revenue after introduction of the price ceiling is the same and there is zero lost revenue.\r\n\r\n**Test Case 3**: The initial revenue is $10 + 9 + 8 + 7 + 6 = 40$. Since $P_i \\gt 5$ for each valid $i$, the prices of all items decrease to $5$. The revenue afterwards is $5 \\cdot 5 = 25$ and the lost revenue is $40 - 25 = 15$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/_gEBpEw8bDU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"4-06-2020","tags":{"0":"aryanag_adm","1":"cakewalk","2":"implementation","3":"june20","4":"rajarshi_basu"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/PRICECON","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=PRICECON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/PRICECON.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/PRICECON.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/PRICECON.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/PRICECON.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/PRICECON.pdf) as well.

Chef has $N$ items in his shop (numbered $1$ through $N$); for each valid $i$, the price of the $i$-th item is $P_i$. Since Chef has very loyal customers, all $N$ items are guaranteed to be sold regardless of their price.

However, the government introduced a *price ceiling* $K$, which means that for each item $i$ such that $P_i \gt K$, its price should be reduced from $P_i$ to $K$.

Chef's *revenue* is the sum of prices of all the items he sells. Find the amount of revenue which Chef loses because of this price ceiling.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $K$.
- The second line contains $N$ space-separated integers $P_1, P_2, \ldots, P_N$.

### Output
For each test case, print a single line containing one integer ― the amount of lost revenue.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10,000$
- $1 \le P_i \le 1,000$ for each valid $i$
- $1 \le K \le 1,000$

### Subtasks
**Subtask #1 (100 points):** original constraints

### Example Input
```
3
5 4
10 2 3 4 5
7 15
1 2 3 4 5 6 7
5 5
10 9 8 7 6
```

### Example Output
```
7
0
15
```

### Explanation
**Test Case 1**: The initial revenue is $10 + 2 + 3 + 4 + 5 = 24$. Because of the price ceiling, $P_1$ decreases from $10$ to $4$ and $P_5$ decreases from $5$ to $4$. The revenue afterwards is $4 + 2 + 3 + 4 + 4 = 17$ and the lost revenue is $24 - 17 = 7$.

**Test Case 2**: The initial revenue is $1 + 2 + 3 + 4 + 5 + 6 + 7 = 28$. For each valid $i$, $P_i \le 15$, so there are no changes, the revenue after introduction of the price ceiling is the same and there is zero lost revenue.

**Test Case 3**: The initial revenue is $10 + 9 + 8 + 7 + 6 = 40$. Since $P_i \gt 5$ for each valid $i$, the prices of all items decrease to $5$. The revenue afterwards is $5 \cdot 5 = 25$ and the lost revenue is $40 - 25 = 15$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>