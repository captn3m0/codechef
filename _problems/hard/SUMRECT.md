---
{"category_name":"hard","problem_code":"SUMRECT","problem_name":"Sum of Areas","problemComponents":{"constraints":"- $1 \\leq T \\leq 4,000$\n- $1 \\leq N \\leq 10^5$\n- $1 \\leq M \\leq 10^8$\n- the sum of $N$ over all test cases does not exceed $10^5$\n","constraintsState":true,"subtasks":"**Subtask #1 (20 points):**\n- the sum of $N$ over all test cases does not exceed $1,000$\n- the sum of $M$ over all test cases does not exceed $1,000$\n- $P = 998,244,353$\n\n**Subtask #2 (10 points):** $P = 2$\n\n**Subtask #3 (70 points):** $P = 998,244,353$\n","subtasksState":true,"inputFormat":"- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.\n- The first and only line of each test case contains three space-separated integers $N$, $M$ and $P$.\n","inputFormatState":true,"outputFormat":"For each test case, print a single line containing one integer --- the sum of costs of all paths modulo $P$.\n","outputFormatState":true,"sampleTestCases":{"0":{"id":1,"input":"4\n1 1 998244353\n2 2 998244353\n3 3 998244353\n3 3 2\n","output":"1\n14\n260\n0","explanation":"","isDeleted":false},"1":{"id":2,"input":"1\n10 10 998244353","output":996017662,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"rivalq","problem_tester":"","date_added":"25-08-2021","tags":{"0":"rivalq"},"problem_difficulty_level":"Hard","best_tag":"","editorial_url":"","time":{"view_start_date":1630170002,"submit_start_date":1630170002,"visible_start_date":1630170002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SUMRECT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Mandarin](https://www.codechef.com/download/translated/LTIME99/mandarin/SUMRECT.pdf), [Russian](https://www.codechef.com/download/translated/LTIME99/russian/SUMRECT.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME99/vietnamese/SUMRECT.pdf) as well.

Let a $(x, y)$ rectangle denote an axis-aligned rectangle with width equal to $x$ and height equal to $y$, where $x$ and $y$ are positive integers.

You are given a $(N, M)$ rectangle. You must repeat the following process as long as your rectangle has at least one side longer than $1$:
- Make a horizontal or vertical cut inside the rectangle, splitting it into two rectangles. The sides of both these rectangles must still be positive integers.
- If the cut is horizontal, discard the bottom rectangle, otherwise discard the right rectangle. The process continues with the remaining rectangle.

In the end, you are left with a $(1, 1)$ rectangle --- a square with side length $1$.

There may be several possible ways or *paths* to reduce a $(N, M)$ rectangle to a $(1,1)$ rectangle. Let's define the cost of a path as the sum of areas of all rectangles present in that path, including the $(N,M)$ and $(1,1)$ rectangle.

For example, let's consider a $(2,2)$ rectangle. There are two possible paths to reduce a $(2,2)$ rectangle to a $(1,1)$ rectangle:
- $(2,2) \rightarrow (1,2) \rightarrow (1,1)$
- $(2,2) \rightarrow (2,1) \rightarrow (1,1)$

The cost of the first path is $2 \cdot 2 + 1 \cdot 2 + 1 \cdot 1 = 7$, and similarly, the cost of the second path is $2 \cdot 2 + 2 \cdot 1 + 1 \cdot 1 = 7$.

You are also given a known prime number $P$. Find the sum of costs of all possible paths modulo $P$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>