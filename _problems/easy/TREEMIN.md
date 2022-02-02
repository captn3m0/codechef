---
{"category_name":"easy","problem_code":"TREEMIN","problem_name":"The Minimum Game","problemComponents":{"constraints":"- $1 \\leq T \\leq 10^4$\n- $1 \\leq N \\leq 10^5$\n- $0 \\leq K \\leq 200$\n- $-10^9 \\leq A_i \\leq 10^9$\n- $1 \\leq x, y \\leq N$\n- The sum of $N$ over all test cases does not exceed $10^5$\n \n\n","constraintsState":true,"subtasks":"","subtasksState":false,"inputFormat":"- The first line of input contains a single integer $T$, denoting the number of testcases. The description of the $T$ testcases follows.\n- The first line of each test case contains two space separated integers $N$ and $K$.\n- The second line of each test case contains $N$ space separated integers $A_1, A_2,..., A_N$. It is guaranteed that $A_1 = 0$.\n- The following $N-1$ lines contains two space separated integers $x$ and $y$, which denotes that there is an edge between nodes $x$ and $y$.\n\n","inputFormatState":true,"outputFormat":"For each testcase, output in a single line the answer to the Charlie\u0027s problem.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"3\n3 1\n0 1 2\n1 2\n1 3\n4 0\n0 1 2 3\n1 2\n1 3\n2 4\n7 0\n0 2 1 4 2 7 3\n1 2\n1 3\n2 4\n2 5\n3 6\n3 7\n","output":"1\n2\n6\n","explanation":"**Test Case $1$:** Alice can move the marker to node $2$, and hence making score $= 1$. If Alice skips her chance, then Bob can move the marker to node $3$, and hence making score = $2$. Therefore, Alice will not skip her chance.\n\n**Test Case $2$:** If Alice moves the marker to node $2$, then Bob will move the marker to node $4$, making score = $4$. If Alice moves the marker to node $3$, the game will end, and the score will be $2$.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"lavish315","problem_tester":"","date_added":"20-09-2021","tags":{"0":"depth","1":"dynamic","2":"easy","3":"game","4":"lavish315","5":"start12","6":"trees"},"problem_difficulty_level":"Unavailable","best_tag":"Dynamic Programming","editorial_url":"https://discuss.codechef.com/problems/TREEMIN","time":{"view_start_date":1632331800,"submit_start_date":1632331800,"visible_start_date":1632331800,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TREEMIN","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Alice and Bob have invented a new game. They have a rooted tree having $N$ nodes (rooted at node $1$), and the $i^{th}$ node has the value $A_i$ associated with it ($1$-indexed). The value associated with the root node is $0$.

They start with a marker at the root node, and a score of $0$. Alice and Bob moves alternatively, with Alice moving first. In one move, they can move the pointer from a node to one of its child node, and add the value associated with that child node to the score. If the marker reaches a leaf node, the game ends. 

Alice wants to minimize the score of the game, whereas Bob wants to maximize the score. They were about to start the game when the Charlie arrives. He looked at the game, and declared the game to be boring. However, Charlie asked them - "What will be the score at the end of the game, if $\textbf{each}$ one of you can skip $\textbf{at most}$ $K$ moves?"

Can you help Alice and Bob to answer Charlie?
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>