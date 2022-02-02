---
{"category_name":"easy","problem_code":"FINXOR","problem_name":"Find XOR","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/GMc1_Bef8xo","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"krikti","problem_tester":"","date_added":"20-07-2020","tags":{"0":"easy","1":"gaussian","2":"interactive","3":"krikti","4":"krikti","5":"sept20","6":"xor"},"problem_difficulty_level":"Easy-Medium","best_tag":"Gaussian Elimination","editorial_url":"https://discuss.codechef.com/problems/FINXOR","time":{"view_start_date":1600075802,"submit_start_date":1600075802,"visible_start_date":1600075802,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FINXOR","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/SEPT20/hindi/FINXOR.pdf), [Bengali](https://www.codechef.com/download/translated/SEPT20/bengali/FINXOR.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/SEPT20/mandarin/FINXOR.pdf), [Russian](https://www.codechef.com/download/translated/SEPT20/russian/FINXOR.pdf), and [Vietnamese](https://www.codechef.com/download/translated/SEPT20/vietnamese/FINXOR.pdf) as well.

**This is an interactive problem.**

There is a sequence of positive integers $A_1, A_2, \ldots, A_N$. You do not know this sequence, but your task is to find the value of $A_1 \oplus A_2 \oplus \ldots \oplus A_N$, where $\oplus$ denotes the <a href="https://en.wikipedia.org/wiki/Bitwise_operation#XOR">bitwise XOR operation</a>.

You may ask up to $20$ questions. In each question, you should choose an integer $K$ ($1 \le K \le 2 \cdot 10^6$) and the interactor responds with the value of $(A_1 \oplus K) + (A_2 \oplus K) + \ldots + (A_N \oplus K)$.

### Interaction
- First, you should read a line containing a single integer $T$ denoting the number of test cases. The description of interaction for $T$ test cases follows.
- For each test case, you should start by reading a line containing a single integer $N$.
- To ask a question, you should print a line containing two space-separated integers $1$ and $K$, where $1 \le K \le 2 \cdot 10^6$. Then, you must read a line containing a single integer ― the answer to your question or $-1$ if the question is invalid or you asked more than $20$ questions.
- Finally, you should print a line containing two space-separated integers $2$ and $X$, where $X = A_1 \oplus A_2 \oplus \ldots \oplus A_N$. Then, you must read a line containing a single integer: $1$ if your answer was correct or $-1$ if it was incorrect. If your answer was correct, you should continue solving the remaining test cases.

Note that when you receive an answer $-1$, you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict. Don't forget to flush the output after printing each line!

### Constraints
- $1 \le T \le 100$
- $1 \le N \le 10^3$
- $1 \le A_i \le 10^6$ for each valid $i$

### Subtasks
**Subtask #1 (15 points):** $A_i \le 100$ for each valid $i$

**Subtask #2 (85 points):** original constraints

### Example
```
You             Grader
                1
                4
1 2
                10
1 5 
                18
2 4
                1
```

### Explanation
**Example case 1:** The hidden sequence is $A = [1,2,3,4]$.
- We ask a question with $K = 2$. The grader responds with $A_1 \oplus 2 + A_2 \oplus 2 + A_3 \oplus 2 + A_4 \oplus 2 = 10$.
- Then, we ask a question with $K = 5$ and the grader responds with $A_1 \oplus 5 + A_2 \oplus 5 + A_3 \oplus 5 + A_4 \oplus 5 = 18$.

Therefore, $A_1 \oplus A_2 \oplus A_3 \oplus A_4 = 4$.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>