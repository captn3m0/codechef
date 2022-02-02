---
{"category_name":"easy","problem_code":"INTXOR","problem_name":"Chef and Interactive XOR","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"huzaifa242","problem_tester":null,"date_added":"22-11-2018","tags":{"0":"dec18","1":"huzaifa242","2":"simple"},"editorial_url":"https://discuss.codechef.com/problems/INTXOR","time":{"view_start_date":1545075122,"submit_start_date":1545075122,"visible_start_date":1545075122,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements [Hindi](http://www.codechef.com/download/translated/DEC18/hindi/INTXOR.pdf) , [Vietnamese](http://www.codechef.com/download/translated/DEC18/vietnamese/INTXOR.pdf) , [Mandarin Chinese](http://www.codechef.com/download/translated/DEC18/mandarin/INTXOR.pdf) , [Russian](http://www.codechef.com/download/translated/DEC18/russian/INTXOR.pdf) and [Bengali](http://www.codechef.com/download/translated/DEC18/bengali/INTXOR.pdf) as well.

**This is an interactive problem.** 

Chef and Cheffa are playing a game. Chef has a sequence of positive integers $a_1, a_2, \dots, a_N$; Cheffa should find the values of all elements of this sequence. Cheffa may ask Chef at most $N$ questions. In each question, Cheffa tells Chef 3 distinct indices $i$, $j$ and $k$, and Chef responds with an integer $a_i \oplus a_j \oplus a_k$ ($\oplus$ denotes bitwise XOR).

Also, Chef has an additional condition: for each index $x$, $x$ may appear in all questions in total at most $3$ times.

You should play the game for Cheffa; the grader plays for Chef. Find the sequence $a$!

### Interaction
- First, you should read a line containing a single integer $T$ denoting the number of test cases.
- For each test case, you should start by reading a line containing a single integer $N$.
- To ask a question, you should print a line containing four space-separated integers $1$, $i$, $j$ and $k$ ($1 \le i, j, k \le N$; $i \neq j$, $j \neq k$, $k \neq i$). Then, you must read a line containing a single integer: the answer to your question or $-1$ if the question is invalid or you asked more than $N$ questions.
- To finish solving a test case, you should print a single line containing $N+1$ space-separated integers $2$, $a_1, a_2, \dots, a_N$. Then, you must read a line containing a single integer: $1$ if your output is correct or $-1$ if it is incorrect.

Note that when you receive an answer $-1$, you should immediately terminate your program to receive a Wrong Answer verdict; otherwise, you may receive any verdict. Don't forget to flush the output after printing each line!

### Constraints 
- $1 \le T \le 20$
- $8 \le N \le 5 \cdot 10^4$
- $1 \le a_i \le 2^{30}$ for each valid $i$
- the sum of $N$ over all test cases does not exceed $2 \cdot 10^5$

### Subtasks
**Subtask #1 (10 points):** $i = j$, $j = k$ or $k = i$ is allowed in each question
  
**Subtask #2 (25 points):** $a_{i+1} = a_i+1$ for each valid $i$

**Subtask #3 (65 points):** original constraints

### Example
```
You                 Grader
                    1
                    4
1 1 1 1
                    4
1 2 2 2
                    9
1 3 3 3
                    10
1 4 4 4
                    11
2 4 9 10 11
                    1
```

### Explanation
We use $N = 4$ here for clarity; $N \ge 8$ in real test data. Note that this example would be invalid for subtasks 2 and 3.
