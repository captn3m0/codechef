---
{"category_name":"school","problem_code":"INTRVS","problem_name":"Ashishgup and Interviews","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"5\r\n7 30\r\n-1 0 4 -1 -1 40 -1\r\n6 30\r\n1 0 1 1 1 0\r\n6 44\r\n1 1 1 1 -1 0\r\n7 31\r\n2 3 42 -1 -1 -1 4\r\n6 60\r\n1 -1 0 60 -1 -1","output":"Rejected\r\nBot\r\nAccepted\r\nToo Slow\r\nAccepted","explanation":"- **Example case 1:** There are $N=7$ problems but candidate was able to solve only $3$ of them which is less than $ceil(N/2)$ and hence the verdict is **Rejected**.\r\n\r\n- **Example case 2:** The candidate solved all the problems and took at most $1$ second to answer each one of them. Hence the verdict is **Bot**.\r\n\r\n- **Example case 3:** The candidate solved $5$ out of $N=6$ problems. The verdict is not **Too Slow** as $K=44$. The verdict is also not **Bot** because candidate couldn\u0027t solve all of the $N=6$ problems. Hence the verdict is **Accepted**.\r\n\r\n- **Example case 4:** The candidate solved $4$ out of $N=7$ problems but took $42$ seconds to answer the $3$-rd problem which is more more than $K=31$. Hence the verdict is **Too Slow**.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/xs_hMQewxgY","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"smit_adm","problem_tester":"","date_added":"9-01-2021","tags":{"0":"cakewalk","1":"ltime92","2":"smit_adm"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/INTRVS","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=INTRVS","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problem statements in [Hindi](https://www.codechef.com/download/translated/LTIME92/hindi/INTRVS.pdf), [Bengali](https://www.codechef.com/download/translated/LTIME92/bengali/INTRVS.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/LTIME92/mandarin/INTRVS.pdf), [Russian](https://www.codechef.com/download/translated/LTIME92/russian/INTRVS.pdf), and [Vietnamese](https://www.codechef.com/download/translated/LTIME92/vietnamese/INTRVS.pdf) as well.

Ashishgup wants to conduct interviews to hire people to work for him. He decided to automate the interview process to save time. The server asks $N$ problems to the interviewee and stores the amount of time a candidate takes to solve each problem. More formally, the data is stored as an array $A$, where the $i$-th integer $A_i$ denotes the time (in seconds) the candidate took to solve the $i$-th problem.    
Note that $A_i$ = $-1$ denotes that the candidate was not able to solve the $i$-th problem at all. Can you help Ashish automate the process by writing a code to find the verdict of the interview?

The verdict can be one of the following: 
- **Rejected:** If the number of problems that the candidate solved is strictly less than $ceil(N/2)$.      
- **Too Slow:** If candidate is not **Rejected** and candidate took more than $K$ seconds to solve at least one problem among the problems solved by the candidate.        
- **Bot:**  If candidate is neither **Rejected** nor **Too Slow**, but has solved all of the $N$ problems in at most one second each.          
- **Accepted:** If the candidate is neither **Rejected**, **Too Slow**, nor **Bot**, she is **Accepted**.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space separated integers - $N$ and $K$ respectively.    
- The second line of each test case contains $N$ space separated integers - $A_1, A_2, \ldots, A_N$. 

### Output
- For each testcase, output a single line containing the verdict of the interview.    
- The judge is **case-insensitive** so if the answer is **Accepted** then any one of **accepted**, **aCCepted**, **ACCEPTED**, etc will be considered as a correct answer.

### Constraints
- $1 \leq T \leq 10^4$
- $6 \leq N \leq 100$
- $30 \leq K \leq 60$
- $-1 \leq A_i \leq 120$

### Subtasks
- 100% points - Original constraints

### Example Input
```
5
7 30
-1 0 4 -1 -1 40 -1
6 30
1 0 1 1 1 0
6 44
1 1 1 1 -1 0
7 31
2 3 42 -1 -1 -1 4
6 60
1 -1 0 60 -1 -1
```

### Example Output
```
Rejected
Bot
Accepted
Too Slow
Accepted
```

### Explanation
- **Example case 1:** There are $N=7$ problems but candidate was able to solve only $3$ of them which is less than $ceil(N/2)$ and hence the verdict is **Rejected**.

- **Example case 2:** The candidate solved all the problems and took at most $1$ second to answer each one of them. Hence the verdict is **Bot**.

- **Example case 3:** The candidate solved $5$ out of $N=6$ problems. The verdict is not **Too Slow** as $K=44$. The verdict is also not **Bot** because candidate couldn't solve all of the $N=6$ problems. Hence the verdict is **Accepted**.

- **Example case 4:** The candidate solved $4$ out of $N=7$ problems but took $42$ seconds to answer the $3$-rd problem which is more more than $K=31$. Hence the verdict is **Too Slow**.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>