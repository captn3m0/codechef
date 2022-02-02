---
{"category_name":"easy","problem_code":"SIGNTURE","problem_name":"Signature","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n3 3\r\n100\r\n010\r\n000\r\n000\r\n010\r\n001\r\n4 4\r\n0000\r\n0110\r\n0000\r\n0011\r\n1100\r\n0000\r\n1100\r\n0000\r\n3 3\r\n100\r\n000\r\n001\r\n000\r\n010\r\n000\r\n3 3\r\n000\r\n010\r\n000\r\n100\r\n000\r\n001\r\n3 3\r\n111\r\n000\r\n000\r\n001\r\n001\r\n001","output":"0\r\n2\r\n1\r\n0\r\n2","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"kingofnumbers","problem_tester":null,"date_added":"14-11-2019","tags":{"0":"cook112","1":"implementation","2":"kingofnumbers","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SIGNTURE","time":{"view_start_date":1574015400,"submit_start_date":1574015400,"visible_start_date":1574015400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SIGNTURE","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK112/hindi/SIGNTURE.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK112/mandarin/SIGNTURE.pdf), [Russian](https://www.codechef.com/download/translated/COOK112/russian/SIGNTURE.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK112/vietnamese/SIGNTURE.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK112/bengali/SIGNTURE.pdf) as well.

Chef bought an electronic board and pen. He wants to use them to record his clients' signatures.

The board is a grid with $N$ rows (numbered $1$ through $N$) and $M$ columns (numbered $1$ through $M$) of pixels. Initially, all pixels are white. A client uses the electronic pen to sign on the board; whenever the pen touches a pixel, this pixel becomes black. Note that a signature may be non-continuous (a client may lift the pen while signing).

Chef stores a typical signature of his current client as a matrix of characters $A_{i, j}$, where for each valid $i$ and $j$, $A_{i, j}$ is either '1' (if the cell in the $i$-th row and $j$-th column is black) or '0' (if this cell is white). The client just signed on the board; this signature is stored in the same form as a matrix $B_{i, j}$. Chef wants to know how close this signature is to this client's typical signature.

Two signatures are considered the same if it is possible to choose (possibly negative) integers $dr$ and $dc$ such that for each $1 \le i \le N$ and $1 \le j \le M$, $A_{i, j} = B_{i + dr, j + dc}$. Here, if $B_{i + dr, j + dc}$ does not correspond to a valid cell, it is considered to be '0'.

To compare the signatures, the colours of zero or more cells must be flipped in such a way that the signatures become the same (each flipped cell may be in any matrix). The error in the client's current signature is the minimum number of cells whose colours must be flipped. Find the error in the signature.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains a string with length $M$ describing the $i$-th row of the matrix $A$.
- $N$ more lines follow. For each valid $i$, the $i$-th of these lines contains a string with length $M$ describing the $i$-th row of the matrix $B$.

### Output
For each test case, print a single line containing one integer — the error in the current signature.

### Constraints 
- $1 \le T \le 50$
- $2 \le N, M \le 25$

### Example Input
```
5
3 3
100
010
000
000
010
001
4 4
0000
0110
0000
0011
1100
0000
1100
0000
3 3
100
000
001
000
010
000
3 3
000
010
000
100
000
001
3 3
111
000
000
001
001
001
```

### Example Output
```
0
2
1
0
2
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>