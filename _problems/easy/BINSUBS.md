---
{"category_name":"easy","problem_code":"BINSUBS","problem_name":"Binary Subsequence","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"6\r\n2\r\n01\r\n3\r\n110\r\n5\r\n10101\r\n5\r\n10011\r\n6\r\n111000\r\n19\r\n1101000010110111010","output":"0\r\n1\r\n2\r\n1\r\n3\r\n7","explanation":"**Example case 1:** The string is already non-decreasing, so we don\u0027t need to remove any elements. Note that we may choose an empty subsequence.\r\n\r\n**Example case 2:** We can remove $s_{3}$ to get the resulting string $11$ which satisfies the condition. \r\n\r\n**Example case 3:** We can remove $s_{2}$ and $s_{4}$ to get the resulting string $111$ which satisfies the condition. \r\n\r\n**Example case 4:** We can remove $s_{1}$ to get the resulting string $0011$ which satisfies the condition. \r\n\r\n**Example case 5:** We can remove $s_{1}$, $s_{2}$ and $s_{3}$ to get the resulting string $000$ which satisfies the condition. Or we can remove $s_{4}$, $s_{5}$ and $s_{6}$ to get $111$.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/w-sViv20bck","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ashishgup","problem_tester":"","date_added":"30-01-2021","tags":{"0":"ashishgup","1":"ltime92","2":"simple"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/BINSUBS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=BINSUBS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/BINSUBS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/BINSUBS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/BINSUBS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/BINSUBS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/BINSUBS.pdf) as well.

You have a binary string $s$ of length $N$.

What is the length of the shortest subsequence of $s$ that needs to be erased for the resulting string to be non-decreasing?

###Input:

- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains a single integers $N$.
- The second line contains a single string  $s$ of length $N$.

###Output:
For each test case, print a single line containing one integer $-$ the length of the shortest subsequence that satisfies the property.

###Constraints 
- $1 \leq T \leq 10^{4}$
- $1 \leq N \leq 10^{5}$
- The  sum of $N$ over all test cases does not exceed  $10^{6}$
- Every character in every string is either $0$ or $1$.

###Subtasks

**Subtask #1 (30 points):**
- $T \leq 1000$
- $N \leq 100$

**Subtask #2 (70 points):** original constraints

###Sample Input:
```
6
2
01
3
110
5
10101
5
10011
6
111000
19
1101000010110111010
```
###Sample Output:
```
0
1
2
1
3
7
```
###EXPLANATION:

**Example case 1:** The string is already non-decreasing, so we don't need to remove any elements. Note that we may choose an empty subsequence.

**Example case 2:** We can remove $s_{3}$ to get the resulting string $11$ which satisfies the condition. 

**Example case 3:** We can remove $s_{2}$ and $s_{4}$ to get the resulting string $111$ which satisfies the condition. 

**Example case 4:** We can remove $s_{1}$ to get the resulting string $0011$ which satisfies the condition. 

**Example case 5:** We can remove $s_{1}$, $s_{2}$ and $s_{3}$ to get the resulting string $000$ which satisfies the condition. Or we can remove $s_{4}$, $s_{5}$ and $s_{6}$ to get $111$.


<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>