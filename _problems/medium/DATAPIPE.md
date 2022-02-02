---
{"category_name":"medium","problem_code":"DATAPIPE","problem_name":"Data Pipelines","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"26-10-2018","tags":{"0":"admin2","1":"arithmetic","2":"cook100","3":"easy","4":"maths","5":"pattern","6":"taran_1407"},"editorial_url":"https://discuss.codechef.com/problems/DATAPIPE","time":{"view_start_date":1542565802,"submit_start_date":1542565802,"visible_start_date":1542565802,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>###Read problems statements in [Hindi](http://www.codechef.com/download/translated/CK100TST/hindi/DATAPIPE.pdf), [Mandarin Chinese](http://www.codechef.com/download/translated/CK100TST/mandarin/DATAPIPE.pdf), [Russian](http://www.codechef.com/download/translated/CK100TST/russian/DATAPIPE.pdf), [Vietnamese](http://www.codechef.com/download/translated/CK100TST/vietnamese/DATAPIPE.pdf) and [Bengali](http://www.codechef.com/download/translated/CK100TST/bengali/DATAPIPE.pdf) as well.

Data pipelines are very important in dealing with big data. A data pipeline takes data from some source stream(s), processes this data and sends it to output stream(s).

Codechef Beam is an example of such a pipeline. This pipeline takes data from $N_s$ source streams and it is expected to send data to $N_{oe}$ output streams. However, the actual number of output streams may be different.

Internally, Beam calculates a parameter $K = \lceil N_s / N_{oe} \rceil$: the maximum number of source streams that may be sent to a single output stream. Then, output streams are created. The first $K$ input streams are assigned to one output stream, the next $K$ input streams to a second output stream and so on, until there are less than $K$ unassigned input streams. Then, if the number of unassigned input streams is positive, another output stream is created and all those unassigned input streams are assigned to it. For example, for $N_s = 35$, $N_{oe} = 20$, we have $K = 2$ and the actual number of output streams is $18$: $17$ output streams taking $2$ input streams each and one output stream taking $1$ input stream.

You are given $N_{oe}$, the maximum possible number of input streams $M$ and the desired final number of output streams $N_{of}$. Find the number of integers $x$ from $1$ to $M$ (inclusive) such that if $N_s = x$, Codechef Beam sends data to exactly $N_{of}$ output streams.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $M$, $N_{oe}$ and $N_{of}$.

### Output
For each test case, print a single line containing one integer — the number of possible values of $N_s$ satisfying the given criteria.

### Constraints
- $1 \le T \le 10^3$
- $1 \le M, N_{oe}, N_{of} \le 10^9$

### Example Input
```
2
40 20 18
40 20 5
```

### Example Output
```
3
1
```

### Explanation
**Example case 1:** The number of input streams $N_s$ can be $18$, $35$ or $36$.

**Example case 2:** The number of input streams must be $5$, since the number of output streams cannot be $5$ otherwise.
