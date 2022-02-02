---
{"category_name":"easy","problem_code":"VSTRING","problem_name":"Valid String","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"3\r\n4 1\r\n1100\r\n4 0\r\n0101\r\n6 1\r\n101001","output":"YES\r\nNO\r\nYES","explanation":"**Case 1:** In the original configuration maximum number of $0\u0027s$ between $2$ adjacent $1\u0027s$ is $0$, therefore it satisfies the criteria.\r\n\r\n**Case 2:** The $4$ circular rotations of the string S = {\u00220101\u0022, \u00221010\u0022, \u00220101\u0022, \u00221010\u0022}. In all the cases the maximum number of $0\u0027s$ between $2$ consecutive $1\u0027s$ is $1$ which doesn\u0027t satisfies the criteria.\r\n\r\n**Case 3:** The $6$ circular rotations of the string S = {\u0022101001\u0022, \u0022110100\u0022, \u0022011010\u0022, \u0022001101\u0022, \u0022100110\u0022, \u0022010011\u0022} out of which $second$, $third$ and $fourth$ strings satisfy the criteria.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/UX8MqOvhEqU","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":0.5,"source_sizelimit":50000,"problem_author":"daanish_adm","problem_tester":"","date_added":"19-02-2021","tags":{"0":"daanish_adm","1":"easy","2":"start1","3":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/VSTRING","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=VSTRING","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Bengali](https://www.codechef.com/download/translated/START1/bengali/VSTRING.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/START1/mandarin/VSTRING.pdf), [Russian](https://www.codechef.com/download/translated/START1/russian/VSTRING.pdf), and [Vietnamese](https://www.codechef.com/download/translated/START1/vietnamese/VSTRING.pdf) as well.

Given a binary string $S$ consisting of $0's$ and $1's$, find whether there exists a rightwise  [circular rotation](https://en.wikipedia.org/wiki/Circular_shift) of the string such that every 2 adjacent $1's$ are separated by at most $C$ $0's$.

**Note:** The last occurrence of $1$ in the rotated string won't have any $1$ next to it, i.e, first and the last ones in the string are not considered to be adjacent.

###Input:

- First line will contain $T$, number of testcases. Then the testcases follow. 
- Each testcase contains of two lines of input.
- First line contains two space separated integers $N, C$, length of the string and the upper limit on a number of $0's$ between $2$ adjacent $1's$.
-  Second line contains the binary string $S$.

###Output:
For each testcase, output in a single line "YES" if there exists a rightwise circular rotation of string satisfying the criteria and "NO" if it doesn't exist.

**Note:** The output is case-insensitive ― each letter may be printed in upper case or lower case.

###Constraints 
- $1 \leq N \leq 5*10^5$
- $0 \leq C \leq max(0, N - 2)$
- Sum of $N$ over all tests is atmost $10^6$.

###Sample Input:
```
3
4 1
1100
4 0
0101
6 1
101001
```

###Sample Output:
```
YES
NO
YES
```
	
###Explanation:
**Case 1:** In the original configuration maximum number of $0's$ between $2$ adjacent $1's$ is $0$, therefore it satisfies the criteria.

**Case 2:** The $4$ circular rotations of the string S = {"0101", "1010", "0101", "1010"}. In all the cases the maximum number of $0's$ between $2$ consecutive $1's$ is $1$ which doesn't satisfies the criteria.

**Case 3:** The $6$ circular rotations of the string S = {"101001", "110100", "011010", "001101", "100110", "010011"} out of which $second$, $third$ and $fourth$ strings satisfy the criteria.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>