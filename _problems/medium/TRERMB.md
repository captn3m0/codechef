---
{"category_name":"medium","problem_code":"TRERMB","problem_name":"A Tree to Remember","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n10 6\r\n1 2\r\n1 3\r\n2 4\r\n2 5\r\n3 6\r\n3 7\r\n3 10\r\n7 8\r\n7 9\r\n1 2 2 1 1 3 4 4 3 4\r\n1 2 2 1 1 3 4 4 3 4\r\n1 1\r\n2 3\r\n4 2\r\n2 1\r\n8 2\r\n10 3","output":"38\r\n38\r\n40\r\n38\r\n42\r\n42","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"ezio_26","problem_tester":null,"date_added":"13-03-2020","tags":{"0":"cook116","1":"dfs","2":"ezio_26","3":"lowest","4":"medium","5":"prefix","6":"tmwilliamlin","7":"trees"},"problem_difficulty_level":"Medium-Hard","best_tag":"Lowest Common Ancestor","editorial_url":"https://discuss.codechef.com/problems/TRERMB","time":{"view_start_date":1584901802,"submit_start_date":1584901802,"visible_start_date":1584901802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRERMB","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK116/hindi/TRERMB.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK116/mandarin/TRERMB.pdf), [Russian](https://www.codechef.com/download/translated/COOK116/russian/TRERMB.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK116/vietnamese/TRERMB.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK116/bengali/TRERMB.pdf) as well.

Chef finished inviting all of his friends. Now it is time to get a tree in his house and decorate it for the party. He wants to use the most beautiful tree ever.

The tree Chef chose has $N$ nodes (numbered $1$ through $N$) and it is rooted at node $1$. For each valid $i$, the initial colour of the $i$-th node is $C_i$ and there is a value $A_i$ written in that node. Chef calculates the *beauty* of his tree as $\sum_{i=1}^N A_i \cdot F_i$, where $F_i$ denotes the number of distinct colours of nodes in the subtree of the $i$-th node (including this node).

Now, Chef is trying to improve the beauty of the tree ― he wants to make $Q$ updates, where in each update, he chooses a node $a$ and an integer $x$ and changes the colour of the node $a$ to $x$. After each update, find the beauty of the tree. Note that the updates are permanent, i.e. they affect all subsequent updates.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- Each of the following $N-1$ lines contains two space-separated integers $u$ and $v$ denoting an edge between nodes $u$ and $v$.
- The next line contains $N$ space-separated integers $C_1, C_2, \ldots, C_N$.
- The next line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.
- Each of the following $Q$ lines contains two space-separated integers $a$ and $x$ describing a query.

### Output
For each update, print a single line containing one integer ― the beauty of the tree after this update is performed.

### Constraints
- $1 \le T \le 2$
- $1 \le N, Q \le 10^5$
- $1 \le A_i, C_i \le N$ for each valid $i$
- $1 \le u, v, a, x \le N$
- the graph described on the input is a tree

### Example Input
```
1
10 6
1 2
1 3
2 4
2 5
3 6
3 7
3 10
7 8
7 9
1 2 2 1 1 3 4 4 3 4
1 2 2 1 1 3 4 4 3 4
1 1
2 3
4 2
2 1
8 2
10 3
```

### Example Output
```
38
38
40
38
42
42
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>