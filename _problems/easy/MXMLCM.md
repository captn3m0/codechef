---
{"category_name":"easy","problem_code":"MXMLCM","problem_name":"Maximize LCM","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"2\r\n3 2\r\n2 1 2\r\n4 7\r\n2 5 6 3","output":"1\r\n7","explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"ezio_26","problem_tester":null,"date_added":"23-03-2020","tags":{"0":"easy","1":"ezio_26","2":"ltime82","3":"number","4":"taran_1407"},"problem_difficulty_level":"Easy","best_tag":"Number Theory","editorial_url":"https://discuss.codechef.com/problems/MXMLCM","time":{"view_start_date":1585408500,"submit_start_date":1585408500,"visible_start_date":1585408500,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MXMLCM","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME82/hindi/MXMLCM.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME82/bengali/MXMLCM.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME82/mandarin/MXMLCM.pdf), [Russian](https://www.codechef.com/download/translated/LTIME82/russian/MXMLCM.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME82/vietnamese/MXMLCM.pdf) as well.

Chef is becoming bored with the recent lockdown caused by the coronavirus outbreak. To pass some time, he has started learning cryptography. He is very excited to see different types of keys used in cryptography and decided to invent a new type of a key.

First, Chef made a sequence of integers $A_1, A_2, \ldots, A_N$, which lie between $1$ and $M$ inclusive. After a lot of sleepless nights, he has decided that his key will be the LCM of this sequence, but he is not satisfied ― he wants to make his key as large as possible. In order to do that, he wants to append exactly one more integer to the sequence. This integer must also lie between $1$ and $M$ inclusive.

Help Chef maximise the key. Find the integer which Chef should append to the sequence in order to make the key (the LCM of elements of the resulting sequence) as large as possible. If there are multiple solutions, choose the smallest among the integers to append which maximise the LCM.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $M$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
For each test case, print a single line containing one integer ― the smallest value of the new element which maximises the LCM.

### Constraints
- $1 \le T \le 100$
- $1 \le N, M \le 10^4$
- $1 \le A_i \le M$ for each valid $i$

### Subtasks
**Subtask #1 (50 points):** $N, M \le 10^2$

**Subtask #2 (50 points):** original constraints

### Example Input
```
2
3 2
2 1 2
4 7
2 5 6 3
```

### Example Output
```
1
7
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>