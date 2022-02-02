---
{"category_name":"easy","problem_code":"CODON","problem_name":"Node Codon","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n4 4 3\r\naac\r\naaca\r\n1 2 2 1\r\n2 3 4 2\r\n2 1 2\r\naa\r\naa\r\n1\r\n2","output":"3\r\n1","explanation":"**Example case 1:** The three beautiful paths (sequences of edges) are:\r\n- $(1,2)$, passing through nodes $(1,2,3)$ in this order\r\n- $(4,2)$, also passing through nodes $(1,2,3)$\r\n- $(3,2)$, passing through nodes $(4,2,3)$\r\n\r\n**Example case 2:** There is only one beautiful path, which contains only edge $1$. Note that for this path (sequence of edges), there are two valid sequences of nodes: $(1,2)$ and $(2,1)$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"minh2345","problem_tester":"","date_added":"2-01-2021","tags":{"0":"dynamic","1":"easy","2":"graphs","3":"ltime94","4":"minh2345"},"problem_difficulty_level":"Easy-Medium","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/CODON","time":{"view_start_date":1616864402,"submit_start_date":1616864402,"visible_start_date":1616864402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CODON","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Russian](https://www.codechef.com/download/translated/LTIME94/russian/CODON.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME94/bengali/CODON.pdf), and [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME94/mandarin/CODON.pdf) as well.

You are given an undirected graph with $N$ nodes (numbered $1$ through $N$) and $M$ edges. Each edge connects two distinct nodes. However, there may be multiple edges connecting the same pairs of nodes, and they are considered to be distinct edges. A lowercase English letter is written in each node.

You are also given a string $S$ with length $L$. A *beautiful path* is a sequence of $L-1$ edges such that there is a sequence of $L$ nodes with the following properties:
- for each valid $i$, the $i$-th edge connects the $i$-th and $(i+1)$-th of these nodes
- for each valid $i$, the $i$-th character of $S$ is written in the $i$-th of these nodes

There are no other restrictions — a path may visit nodes or edges any number of times in any order.

Determine the number of beautiful paths in the graph. Since the answer can be very large, compute it modulo $10^9+7$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains three space-separated integers $N$, $M$ and $L$.
- The second line contains a single string $S$ with length $L$.
- The third line contains a single string with length $N$. For each valid $i$, the $i$-th character of the string is the letter written in the $i$-th node.
- Two lines follow. The first line contains $M$ integers $u_1,\ldots,u_m$. The second lines contains $M$ integers, $v_1,\ldots,v_m$. This denotes that there is an edge connecting nodes $u_i$ and to $v_i$. These edges are distinct, even though they may connect the same pair of nodes.

### Output
For each test case, print a single line containing one integer — the number of beautiful paths modulo $10^9+7$.

### Constraints
- $1 \le T \le 200$
- $2 \le N \le 10^3$
- $1 \le M \le 10^3$
- $2 \le L \le 20$
- $S$ contains only lowercase English letters
- $1 \le u, v \le N$
- $u \neq v$

### Subtasks
**Subtask #1 (100 points):** original constraints
 
### Example Input
```
2
4 4 3
aac
aaca
1 2 2 1
2 3 4 2
2 1 2
aa
aa
1
2
```

### Example Output
```
3
1
```

### Explanation
**Example case 1:** The three beautiful paths (sequences of edges) are:
- $(1,2)$, passing through nodes $(1,2,3)$ in this order
- $(4,2)$, also passing through nodes $(1,2,3)$
- $(3,2)$, passing through nodes $(4,2,3)$

**Example case 2:** There is only one beautiful path, which contains only edge $1$. Note that for this path (sequence of edges), there are two valid sequences of nodes: $(1,2)$ and $(2,1)$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>