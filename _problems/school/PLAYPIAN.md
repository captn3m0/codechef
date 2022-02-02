---
{"category_name":"school","problem_code":"PLAYPIAN","problem_name":"Play Piano","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"12-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1544985000,"submit_start_date":1544985000,"visible_start_date":1544985000,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Two sisters, A and B, play the piano every day. During the day, they can play in any order. That is, A might play first and then B, or it could be B first and then A. But each one of them plays the piano exactly once per day. They maintain a common log, in which they write their name whenever they play.

You are given the entries of the log, but you're not sure if it has been tampered with or not. Your task is to figure out whether these entries could be valid or not.

### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- The first line of each test case contains a string $s$ denoting the entries of the log.

### Output
- For each test case, output `yes` or `no` according to the answer to the problem.

###Constraints
- $1 \le T \le 500$
- $2 \le |s| \le 100$
- $|s|$ is even
- Each character of $s$ is either 'A' or 'B'

### Example Input
```
4
AB
ABBA
ABAABB
AA
```

### Example Output
```
yes
yes
no
no
```

###Explanation

**Testcase 1**: There is only one day, and both A and B have played exactly once. So this is a valid log. Hence 'yes'.

**Testcase 2**: On the first day, A has played before B, and on the second day, B has played first. Hence, this is also a valid log.

**Testcase 3**: On the first day, A played before B, but on the second day, A seems to have played twice. This cannot happen, and hence this is 'no'.