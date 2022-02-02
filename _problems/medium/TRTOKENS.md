---
{"category_name":"medium","problem_code":"TRTOKENS","problem_name":"Tokens On A Tree","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n5\r\n01010\r\n1 1 3 3\r\n5\r\n10101\r\n1 1 3 3","output":"2\r\n0","explanation":"In the first test case, you can first move a token from node $4$ to node $3$, and then move a token from node $2$ to node $1$.\r\n\r\nIn the second test case, there are no possible valid moves.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"jtnydv25","problem_tester":"","date_added":"27-05-2021","tags":{"0":"depth","1":"eulerian","2":"jtnydv25","3":"ltime96","4":"medium","5":"segment","6":"trees"},"problem_difficulty_level":"Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/TRTOKENS","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TRTOKENS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/TRTOKENS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/TRTOKENS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/TRTOKENS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/TRTOKENS.pdf) as well.

You are given a rooted tree with $N$ nodes numbered $1, 2, \ldots, N$. Node $1$ is the root node. Some of the nodes have a token in them. In one move, you can choose a non-root node that has a token, but its parent doesn't, and move the token from this node to its parent. What is the maximum number of moves you can make?

**Note:** When a token is moved out of a node, the node becomes empty, and other tokens will be able to move there.

###Input

- The first line contains an integer $T$, the number of test cases. Each test case contains three lines.
- The first line of each test case contains an integer $N$, the number of nodes in the tree.
- The second line contains a string $s$ of length $N$. The character $s_i$ is $1$ if node has a token, and $0$ otherwise.
- The third line contains $N - 1$ space separated integers, $p_2, p_3, \ldots p_N$, where $p_i$ is the parent of node $i$.

###Output
For each test case, print the maximum number of moves that can be made on a new line.

###Constraints 
- $1 \le N\le 10^6$
- For each valid $i$,  $1\le p_i < i$.
- The sum of $N$ over all test cases doesn't exceed $10^6$.

###Subtasks
- **Subtask 1 (13 points)**: $T \le 10, N \le 17$.
- **Subtask 2 (18 points)**: The sum of $N$ over all test cases doesn't exceed $2000$.
- **Subtask 3 (41 points)**: The sum of $N$ over all test cases doesn't exceed $10^5$.
- **Subtask 4 (28 points)**: No additional constraints.

###Sample Input
```
2
5
01010
1 1 3 3
5
10101
1 1 3 3
```

###Sample Output
```
2
0
```
	
###Explanation
In the first test case, you can first move a token from node $4$ to node $3$, and then move a token from node $2$ to node $1$.

In the second test case, there are no possible valid moves.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>