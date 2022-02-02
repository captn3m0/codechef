---
{"category_name":"easy","problem_code":"DVL","problem_name":"D-Value","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"10\n7 7 5 6 4 2 3 1 1 1","output":6,"explanation":"","isDeleted":false}}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":3,"source_sizelimit":50000,"problem_author":"kmaaszraa","problem_tester":null,"date_added":"16-10-2019","tags":{"0":"cook111","1":"easy","2":"kmaaszraa","3":"prefix","4":"segment","5":"taran_1407"},"problem_difficulty_level":"Easy-Medium","best_tag":"Segment Tree","editorial_url":"https://discuss.codechef.com/problems/DVL","time":{"view_start_date":1571596202,"submit_start_date":1571596202,"visible_start_date":1571596202,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=DVL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK111/hindi/DVL.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK111/mandarin/DVL.pdf), [Russian](https://www.codechef.com/download/translated/COOK111/russian/DVL.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK111/vietnamese/DVL.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK111/bengali/DVL.pdf) as well.

Dr.D is bored, so he's making up problems to pass the time. Here is one of them.

You are given a sequence $A_1, A_2, \ldots, A_N$. Find the number of 7-tuples of indices $(a, b, c, d, e, f, g)$ such that:
- $1 \le a \lt b \lt c \lt d \lt e \lt f \lt g \le N$
- $A_g \lt A_e \lt A_f \lt A_d \lt A_b \lt A_c \lt A_a$

Since this number could be huge, compute it modulo $987654319$.

### Input
- The first line of the input contains a single integer $N$.
- The second line contains $N$ space-separated integers $A_1, A_2, \ldots, A_N$.

### Output
- Print a single line containing one integer — the number of tuples modulo $987654319$.

### Constraints 
- $1 \le N \le 3,000$
- $1 \le A_i \le 10^9$ for each valid $i$

### Example Input
```
10
7 7 5 6 4 2 3 1 1 1
```

### Example Output
```
6
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>