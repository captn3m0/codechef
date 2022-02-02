---
{"category_name":"easy","problem_code":"ESCTRE","problem_name":"Escape the Tree ","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"ezio_26","problem_tester":null,"date_added":"15-03-2020","tags":{"0":"cook116","1":"easy","2":"ezio_26","3":"interactive","4":"tmwilliamlin","5":"trees"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/ESCTRE","time":{"view_start_date":1584901802,"submit_start_date":1584901802,"visible_start_date":1584901802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=ESCTRE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK116/mandarin/ESCTRE.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK116/vietnamese/ESCTRE.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK116/bengali/ESCTRE.pdf) as well.

Chef is trying to make his birthday party adventurous. He recently heard about *escape the room* games, so he wants to prepare his own version of such a game.

First, Chef will lock his friends in the root of a full binary tree with depth $h$, i.e. with $2^{h+1}-1$ nodes (numbered $1$ through $2^{h+1}-1$). The root has number $1$, but the other nodes may be numbered arbitrarily. His friends can only escape this tree by reaching a *special leaf node*. They do not have any other information about the structure of the tree or the special node.

The friends need to find the number of the special node. In order to do that, they may ask at most $2h+1$ queries of the following two types:
1. Choose a node $x$. Chef's response to this query is the distance between node $x$ and the special node.
2. Choose a node $x$ and an integer $y$. Consider all leaf nodes at the distance $y$ from node $x$. If there is at least one such node, Chef chooses one such node and his response is the number of the node he chose. Otherwise, Chef's response is $0$.

Help Chef's friends find the special node and escape the tree.

### Interaction
- First, you should read a line containing a single integer $T$ denoting the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you should start by reading a line containing a single integer $h$ ― the height of the full binary tree.
- Then, you may ask queries.
    - To ask a query of the first type, you should print a line containing two space-separated integers $1$ and $x$ ($1 \le x \le 2^{h+1}-1$). Then, you must read a line containing a single integer ― the answer to your query, or $-1$ if the query is invalid or if you have asked too many queries.
    - To ask a query of the second type, you should print a line containing three space-separated integers $2$, $x$ and $y$ ($1 \le x \le 2^{h+1}-1$, $0 \le y \le 2h$). Then, you must read a line containing a single integer ― the answer to your query, or $-1$ if the query is invalid or if you have asked too many queries.
- Finally, you should print a line containing two space-separated integers $3$ and $x$, where $x$ is the number of the special leaf node. Then, you must read a line containing a single integer: $1$ if your answer was correct, or $-1$ if it was incorrect or if you have asked too many queries. If your answer was correct, you should continue solving the remaining test cases.

Note that when you receive an answer $-1$, you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict. For each test case, the grader decides that you have asked too many queries as soon as it detects that you have printed $2h+3$ lines ― printing the answer is included, so this corresponds to asking more than $2h+1$ queries.

Don't forget to flush the output after printing each line!

### Constraints
- $1 \le T \le 10$
- $2 \le h \le 15$

### Example
```
You                         Grader
                            1
                            2
1 5
                            3
2 5 2
                            0
2 5 3
                            3
1 3
                            0
3 3
                            1
```

### Note
**Example case 1:** This [tree](https://ibb.co/jvvXnnh) is used by Chef. The special leaf node is node $3$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>