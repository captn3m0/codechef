---
{"category_name":"easy","problem_code":"CHFIMPRS","problem_name":"Impressing Chefina","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n1 2\r\n1 1\r\n2 2\r\n1 1\r\n2 1\r\n3 3\r\n1 2 3\r\n6 5 4\r\n7 8 9","output":"1 1\r\n-1\r\n-1","explanation":"**Example case 1:** The sequence printed by Chef is always $[1, 1]$ and the sequence printed by Chefina is also always $[1, 1]$, so Chef does not need to change the matrix and Chefina will be impressed.","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rishup_nitdgp","problem_tester":null,"date_added":"2-05-2020","tags":{"0":"akashbhalotia","1":"cook118","2":"hashing","3":"observation","4":"palindrome","5":"rishup_nitdgp","6":"rishup_nitdgp","7":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/CHFIMPRS","time":{"view_start_date":1590345002,"submit_start_date":1590345002,"visible_start_date":1590345002,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CHFIMPRS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK118/hindi/CHFIMPRS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK118/mandarin/CHFIMPRS.pdf), [Russian](https://www.codechef.com/download/translated/COOK118/russian/CHFIMPRS.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK118/vietnamese/CHFIMPRS.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK118/bengali/CHFIMPRS.pdf) as well.

Chef has a matrix $A$ with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$); an element in row $i$ and column $j$ is denoted by $A_{i, j}$. He is going to play a game on this matrix with Chefina. In the game, Chef lists the elements of the matrix row by row in an alternating pattern, starting from the top left corner ― he writes down the first row from left to right, the second row from right to left, and so on. Chefina also lists the elements of the matrix row by row, but she starts from the top right corner and writes down the first row from right to left, the second row from left to right, and so on.

Chefina gets impressed if the sequences written by Chef and Chefina turn out to be the same. Chef can rearrange the matrix in any way he chooses in order to impress Chefina. In the rearranged matrix, the number of occurrences of each integer must be the same as in the original matrix.

For example, if the initial matrix is
```
1 1
1 2
```
then there are four possible rearrangements:
```
1 1     1 1     1 2     2 1
1 2     2 1     1 1     1 1
```

Find one way in which Chef can rearrange the matrix to impress Chefina or determine that it is impossible.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$. 
- $N$ lines follow. For each $i$ ($1 \le i \le N$), the $i$-th of these lines contains $M$ space-separated integers $A_{i, 1}, A_{i, 2}, \ldots, A_{i, M}$.

### Output
For each test case:
- If it is impossible to rearrange the matrix in such a way that Chefina gets impressed, print a single line containing the integer $-1$.
- Otherwise, print $N$ lines describing your rearranged matrix. For each $i$ ($1 \le i \le N$), the $i$-th of these lines should contain $M$ space-separated integers ― the elements in the $i$-th row of the rearranged matrix. This matrix must have the same number of occurrences of each integer as the original matrix.

If there is more than one possible answer, you may find any one.

### Constraints
- $1 \le T \le 10^5$
- $1 \le N, M \le 300$
- $1 \le A_{i, j} \le 10^5$ for each valid $i, j$
- the sum of $N \cdot M$ over all test cases does not exceed $5 \cdot 10^5$

### Example Input
```
3
1 2
1 1
2 2
1 1
2 1
3 3
1 2 3
6 5 4
7 8 9
```

### Example Output
```
1 1
-1
-1
```
	
### Explanation
**Example case 1:** The sequence printed by Chef is always $[1, 1]$ and the sequence printed by Chefina is also always $[1, 1]$, so Chef does not need to change the matrix and Chefina will be impressed.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>