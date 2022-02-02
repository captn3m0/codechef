---
{"category_name":"medium","problem_code":"CONTAIN","problem_name":"The Delicious Cake","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n6 2\r\n0 0\r\n6 0\r\n3 4\r\n2 1\r\n4 1\r\n3 3\r\n6 6\r\n3 3","output":"0\r\n1","explanation":"**Example case 1:**\r\n- In the first query, $p = (6, 6)$. The cake cannot have any layers, so its deliciousness is $0$.\r\n- In the second query, $p = (3, 3)$. The cake can have only one layer, e.g. a triangle with vertices $(2, 1), (4, 1), (3, 4)$. Other choices of this layer are also possible, but the cake can never have more than one layer.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"pandey__ji","problem_tester":null,"date_added":"10-05-2020","tags":{"0":"computational","1":"convex","2":"june20","3":"medium","4":"pandey__ji","5":"rajarshi_basu"},"problem_difficulty_level":"Medium","best_tag":"Convex Hull","editorial_url":"https://discuss.codechef.com/problems/CONTAIN","time":{"view_start_date":1592213402,"submit_start_date":1592213402,"visible_start_date":1592213402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CONTAIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/JUNE20/hindi/CONTAIN.pdf), [Bengali](https://www.codechef.com/download/translated/JUNE20/bengali/CONTAIN.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/JUNE20/mandarin/CONTAIN.pdf), [Russian](https://www.codechef.com/download/translated/JUNE20/russian/CONTAIN.pdf), and [Vietnamese](https://www.codechef.com/download/translated/JUNE20/vietnamese/CONTAIN.pdf) as well.

It is Chefina's birthday and Chef wants to prepare a cake for her. He has $N$ points $(X_1, Y_1), (X_2, Y_2), \ldots, (X_N, Y_N)$ in a 2D plane, and a candle which he wants to place at some point in this plane.

The cake is made up of a non-negative number of layers. Chef considers the deliciousness of the cake to be equal to the number of layers in the cake. A layer is a simple polygon whose vertices are some of Chef's $N$ points. It is not required for each of Chef's points to belong to a layer. Furthermore, the layers must satisfy the following conditions:
- For each layer, the candle must lie strictly inside it.
- Each of Chef's $N$ points that lies strictly inside some layer must belong to some other layer **or be the candle point**.
- No two layers may touch or intersect.
- The layers must be chosen in such a way that the deliciousness of the cake is maximum possible.

Now, Chef is wondering about how the deliciousness of the cake depends on where he places the candle. You should answer $Q$ queries. In each query, you are given a point $p = (x, y)$ where Chef wants to place the candle and you have to find the deliciousness of the cake.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains two space-separated integers $X_i$ and $Y_i$.
- Each of the following $Q$ lines contains two space-separated integers $x$ and $y$ describing a query.

### Output
For each query, print a single line containing one integer ― the deliciousness of the cake.

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 5,000$
- $1 \le Q \le 2,000$
- $|X_i|, |Y_i| \le 10^9$ for each valid $i$
- $|x|, |y| \le 10^9$
- the sum of $N$ over all test cases does not exceed $5,000$
- the sum of $Q$ over all test cases does not exceed $2,000$

### Subtasks
**Subtask #1 (15 points):** $N \le 12$

**Subtask #2 (20 points):** for each valid $i$, $X_i = 0$ or $Y_i = 0$

**Subtask #3 (65 points):** original constraints

### Example Input
```
1
6 2
0 0
6 0
3 4
2 1
4 1
3 3
6 6
3 3
```

### Example Output
```
0
1
```

### Explanation
**Example case 1:**
- In the first query, $p = (6, 6)$. The cake cannot have any layers, so its deliciousness is $0$.
- In the second query, $p = (3, 3)$. The cake can have only one layer, e.g. a triangle with vertices $(2, 1), (4, 1), (3, 4)$. Other choices of this layer are also possible, but the cake can never have more than one layer.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>