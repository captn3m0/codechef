---
{"category_name":"easy","problem_code":"RBTREES","problem_name":"Red-blue Trees","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1  \r\n7  \r\n1 2  \r\n1 3  \r\n2 4  \r\n2 5  \r\n3 6  \r\n3 7  \r\n0010010","output":3,"explanation":"**Example case 1:** We can perform the following operations:\r\n- Swap the colours of vertices $1$ and $3$; the string of colours becomes \u00221000010\u0022.\r\n- Swap the colours of vertices $1$ and $2$; the string of colours becomes \u00220100010\u0022.\r\n- Swap the colours of vertices $6$ and $3$; the string of colours becomes \u00220110000\u0022, so the tree is a red-blue tree.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1.5,"source_sizelimit":50000,"problem_author":"pandey__ji","problem_tester":"","date_added":"15-08-2020","tags":{"0":"bipartiteness","1":"cook121","2":"depth","3":"easy","4":"greedy","5":"pandey__ji","6":"pandey__ji","7":"psychik"},"problem_difficulty_level":"Easy-Medium","best_tag":"Depth First Search","editorial_url":"https://discuss.codechef.com/problems/RBTREES","time":{"view_start_date":1598208302,"submit_start_date":1598208302,"visible_start_date":1598208302,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=RBTREES","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK121/hindi/RBTREES.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK121/mandarin/RBTREES.pdf), [Russian](https://www.codechef.com/download/translated/COOK121/russian/RBTREES.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK121/vietnamese/RBTREES.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK121/bengali/RBTREES.pdf) as well.

In a *red-blue tree*, each vertex is either red or blue and adjacent vertices always have different colours.

You are given a tree with $N$ vertices (numbered $1$ through $N$). It is not necessarily a red-blue tree, but its vertices are still coloured red and blue. You may perform the following operation any number of times (including zero): choose two adjacent vertices and swap their colours.

Find the smallest number of operations required to transform the tree into a red-blue tree or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integer $N$.
- $N-1$ lines follow. Each of these lines contains two space-separated integers $u$ and $v$ denoting that vertices $u$ and $v$ are connected by an edge.
- The last line contains a string $S$ with length $N$. For each valid $i$, the $i$-th character of this string is either '0' if the $i$-th vertex is initially red or '1' if it is initially blue.

### Output
Print a single line containing one integer ― the smallest number of operations or $-1$ if it is impossible to transform the tree into a red-blue tree.

### Constraints
- $1 \le T \le 100$  
- $1 \le N \le 100,000$  
- $1 \le u, v \le N$  
- $S$ contains only characters '0' and '1'
- the sum of $N$ over all test cases does not exceed $10^6$

### Example Input
```
1  
7  
1 2  
1 3  
2 4  
2 5  
3 6  
3 7  
0010010
```

### Example Output
```
3
```

### Explanation
**Example case 1:** We can perform the following operations:
- Swap the colours of vertices $1$ and $3$; the string of colours becomes "1000010".
- Swap the colours of vertices $1$ and $2$; the string of colours becomes "0100010".
- Swap the colours of vertices $6$ and $3$; the string of colours becomes "0110000", so the tree is a red-blue tree.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>