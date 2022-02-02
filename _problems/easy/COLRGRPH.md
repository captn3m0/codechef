---
{"category_name":"easy","problem_code":"COLRGRPH","problem_name":"Hidden Colored Graph","problemComponents":{"constraints":"- $1\\le n\\le 100$","constraintsState":true,"subtasks":"- 30 points : $1 \\leq R \\leq 10000$\n- 70 points : $1 \\leq R \\leq 10^9$\n","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\n\nW\n\nB\n\nB\n\nW","output":"\n? 1\n\n? 2\n\n? 3\n\n? 2\n\n!\n001\n001\n110","explanation":"The example is given to demonstrate how the queries work, and it is not guaranteed that the answer can be uniquely determined from the queries in the example.\n\nThe hidden graph is a path $1-3-2$. Initially, the colors for nodes $1$, $2$, $3$ are white, black, black, respectively. Denote it by the string `WBB`.\n\nThe first query asks for node $1$. The interactor responds with its color `W` then flips the color of node $3$. The colors are now `WBW`.\n\nThe second query asks for node $2$. The interactor responds with its color `B` then flips the color of node $3$. The colors are now `WBB`.\n\nThe third query asks for node $3$. The interactor responds with its color `B` then flips the colors of nodes $1$ and $2$. The colors are now `BWB`.\n\nThe fourth query asks for node $2$. The interactor responds with its color `W` then flips the color of node $3$. The colors are now `BWW`.\n\nThen the correct adjacency matrix is guessed.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/YLRmxvKkdEc","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"monogon","problem_tester":"","date_added":"24-07-2021","tags":{"0":"constructive","1":"cook131","2":"easy","3":"graphs","4":"interactive","5":"monogon"},"problem_difficulty_level":"Easy-Medium","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/COLRGRPH","time":{"view_start_date":1627492504,"submit_start_date":1627492504,"visible_start_date":1627492504,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=COLRGRPH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Mandarin Chinese](https://www.codechef.com/download/translated/COOK131/mandarin/COLRGRPH.pdf), [Russian](https://www.codechef.com/download/translated/COOK131/russian/COLRGRPH.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK131/vietnamese/COLRGRPH.pdf) and [Bengali](https://www.codechef.com/download/translated/COOK131/bengali/COLRGRPH.pdf) as well. 

**This is an interactive problem.**

There is a hidden undirected graph with $n$ vertices. There are no self-loops or multiple edges. Each vertex is colored black or white, and the colors are also hidden from you.

To make a query, you choose a vertex $v$. The interactor will respond with the current color of $v$, and then it will flip the colors of all vertices adjacent to $v$. A vertex is not considered adjacent to itself, so the color of $v$ doesn't change.

After at most $6000$ queries, find the adjacency matrix of the graph.

Note: The interactor is not adaptive. In other words, the graph and colors are fixed in the beginning.

### Interaction

Begin the interaction by reading a single integer $n$ - the number of vertices in the graph.

To ask a query, output "`? v`" for a vertex $v$ ($1\le v\le n$). Then read a single character describing the current color of $v$, where "`B`" denotes black and "`W`" denotes white. After making this query, the colors of all vertices adjacent to $v$ will flip.

To print the answer, output "`!`" then on the next $n$ lines print $n$ strings of length $n$, consisting of symbols "`0`" and "`1`". The $j$-th character of the $i$-th string should be "`1`" if and only if there is an edge between vertices $i$ and $j$. Since there are no self-loops, the main diagonal should contain only "`0`".

If at any time you make an invalid query or exceed the query limit, the interaction is terminated and you will receive a Wrong Answer verdict.

**Remember to flush the output after printing each line!**
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>