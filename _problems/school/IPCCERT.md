---
{"category_name":"school","problem_code":"IPCCERT","problem_name":"Chef and IPC Certificates","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"4 8 4\r\n1 2 1 2 5\r\n3 5 1 3 4\r\n1 2 4 5 11\r\n1 1 1 3 12","output":1,"explanation":"- Participant $1$ watched $1 + 2 + 1 + 2 = 6$ minutes of lectures and asked the question $5$ times. Since $6 \\lt M$, this participant does not receive a certificate.\r\n- Participant $2$ watched $3 + 5 + 1 + 3 = 12$ minutes of lectures and asked the question $4$ times. Since $12 \\ge M$ and $4 \\le 10$, this participant receives a certificate.\r\n- Participant $3$ watched $1 + 2 + 4 + 5 = 12$ minutes of lectures and asked the question $11$ times. Since $12 \\ge M$ but $11 \\gt 10$, this participant does not receive a certificate.\r\n- Participant $4$ watched $1 + 1 + 1 + 3 = 6$ minutes of lectures and asked the question $12$ times. Since $6 \\lt M$ and $12 \\gt 10$, this participant does not receive a certificate.\r\n\r\nOnly participant $2$ receives a certificate.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/DsJH0IJXCZ4","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"aryanag_adm","problem_tester":"","date_added":"21-11-2020","tags":{"0":"aryanag_adm","1":"cakewalk","2":"cook124"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/IPCCERT","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=IPCCERT","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK124/hindi/IPCCERT.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK124/mandarin/IPCCERT.pdf), [Russian](https://www.codechef.com/download/translated/COOK124/russian/IPCCERT.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK124/vietnamese/IPCCERT.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK124/bengali/IPCCERT.pdf) as well.

There were $N$ students (numbered $1$ through $N$) participating in the Indian Programming Camp (IPC) and they watched a total of $K$ lectures (numbered $1$ through $K$). For each student $i$ and each lecture $j$, the $i$-th student watched the $j$-th lecture for $T_{i, j}$ minutes.

Additionally, for each student $i$, we know that this student asked the question, "What is the criteria for getting a certificate?" $Q_i$ times.

The criteria for getting a certificate is that a student must have watched at least $M$ minutes of lectures in total and they must have asked the question no more than $10$ times.

Find out how many participants are eligible for a certificate.

### Input
- The first line of the input contains three space-separated integers $N$, $M$ and $K$.
- $N$ lines follow. For each valid $i$, the $i$-th of these lines contains $K+1$ space-separated integers $T_{i, 1}, T_{i, 2}, \ldots, T_{i, K}, Q_i$.

### Output
Print a single line containing one integer — the number of participants eligible for a certificate. 

###Constraints
- $1 \le N, K \le 1,000$
- $1 \le M \le 10^6$
- $1 \le Q_i \le 10^6$ for each valid $i$
- $1 \le T_{i, j} \le 1,000$ for each valid $i$ and $j$

### Example Input
```
4 8 4
1 2 1 2 5
3 5 1 3 4
1 2 4 5 11
1 1 1 3 12
```

### Example Output
```
1
```

### Explanation
- Participant $1$ watched $1 + 2 + 1 + 2 = 6$ minutes of lectures and asked the question $5$ times. Since $6 \lt M$, this participant does not receive a certificate.
- Participant $2$ watched $3 + 5 + 1 + 3 = 12$ minutes of lectures and asked the question $4$ times. Since $12 \ge M$ and $4 \le 10$, this participant receives a certificate.
- Participant $3$ watched $1 + 2 + 4 + 5 = 12$ minutes of lectures and asked the question $11$ times. Since $12 \ge M$ but $11 \gt 10$, this participant does not receive a certificate.
- Participant $4$ watched $1 + 1 + 1 + 3 = 6$ minutes of lectures and asked the question $12$ times. Since $6 \lt M$ and $12 \gt 10$, this participant does not receive a certificate.

Only participant $2$ receives a certificate.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>