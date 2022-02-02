---
{"category_name":"school","problem_code":"TANDJ1","problem_name":"Tom And Jerry 1","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 1 2 2 2\r\n1 1 2 3 4\r\n1 1 1 0 3","output":"YES\r\nNO\r\nYES","explanation":"**Test Case $1$:** A possible sequence of moves is $(1, 1) \\to (1, 2) \\to (2, 2)$.\r\n\r\n**Test Case $2$:** There is a possible sequence in $3$ moves, but not in exactly $4$ moves.\r\n\r\n**Test Case $3$:** A possible sequence of moves is $(1, 1) \\to (1, 0) \\to (0, 0) \\to (1, 0)$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/WMlDsLTD96E","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"14-05-2021","tags":{"0":"cakewalk","1":"daanish_adm","2":"ltime96"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/TANDJ1","time":{"view_start_date":1622482204,"submit_start_date":1622482204,"visible_start_date":1622482204,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=TANDJ1","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/LTIME96/bengali/TANDJ1.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME96/mandarin/TANDJ1.pdf), [Russian](https://www.codechef.com/download/translated/LTIME96/russian/TANDJ1.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME96/vietnamese/TANDJ1.pdf) as well.

There is a grid of size $10^5 \times 10^5$, covered completely in railway tracks. Tom is riding in a train, currently in cell $(a, b)$, and Jerry is tied up in a different cell $(c, d)$, unable to move. The train has no breaks. It shall move exactly $K$ steps, and then its fuel will run out and it shall stop. In one step, the train must move to one of its neighboring cells, sharing a side. Tom can’t move without the train, as the grid is covered in tracks. Can Tom reach Jerry’s cell after exactly $K$ steps?  

**Note:** Tom can go back to the same cell multiple times.

###Input

- The first line contains an integer $T$, the number of test cases. Then the test cases follow. 
- Each test case contains a single line of input, five integers $a, b, c, d, K$. 

###Output
For each testcase, output in a single line "YES" if Tom can reach Jerry's cell in exactly $K$ moves and "NO" if not.

You may print each character of the string in uppercase or lowercase (for example, the strings "yEs", "yes", "Yes" and "YES" will all be treated as identical).

###Constraints 
- $1 \leq T \leq 10^5$
- $0 \leq a, b, c, d \leq 10^5$
- $(a, b) \ne (c, d)$
- $1 \leq K \leq 2 \cdot 10^5$

###Subtasks
**Subtask #1 (100 points):** original constraints

###Sample Input
```
3
1 1 2 2 2
1 1 2 3 4
1 1 1 0 3
```

###Sample Output
```
YES
NO
YES
```

###Explanation
**Test Case $1$:** A possible sequence of moves is $(1, 1) \to (1, 2) \to (2, 2)$.

**Test Case $2$:** There is a possible sequence in $3$ moves, but not in exactly $4$ moves.

**Test Case $3$:** A possible sequence of moves is $(1, 1) \to (1, 0) \to (0, 0) \to (1, 0)$.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>