---
{"category_name":"school","problem_code":"LIFTME","problem_name":"Lift Requests","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{"0":{"id":1,"input":"1\r\n2 3\r\n1 2\r\n0 1\r\n1 0","output":6,"explanation":"**Example case 1:** The lift travels $2$ floors up to serve the first request, $3$ floors ($2$ down, then $1$ up) to serve the second request and $1$ floor down to serve the third request. Note that in this case, the lift returned to the ground floor, but it may end up at any floor.","isDeleted":false}}},"video_editorial_url":"https://youtu.be/EpLYka-qSu8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"rumblefool","problem_tester":"","date_added":"6-04-2020","tags":{"0":"cakewalk","1":"cook117","2":"implementation","3":"rajarshi_basu","4":"rumblefool"},"problem_difficulty_level":"Cakewalk","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/LIFTME","time":{"view_start_date":1587407402,"submit_start_date":1587407402,"visible_start_date":1587407402,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=LIFTME","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
### Read problems statements in [Hindi](https://www.codechef.com/download/translated/COOK117/hindi/LIFTME.pdf), [Mandarin Chinese](https://www.codechef.com/download/translated/COOK117/mandarin/LIFTME.pdf), [Russian](https://www.codechef.com/download/translated/COOK117/russian/LIFTME.pdf), [Vietnamese](https://www.codechef.com/download/translated/COOK117/vietnamese/LIFTME.pdf), and [Bengali](https://www.codechef.com/download/translated/COOK117/bengali/LIFTME.pdf) as well.

Chef lives in a huge apartment building with $N$ floors, numbered $0$ (ground floor) through $N$ (terrace). Unfortunately, it has only one lift. We say that when the lift travels from a floor $a$ to a floor $b$, it travels $|b-a|$ floors.

Initially, the lift is on the ground floor. Then, it receives $Q$ requests (numbered $1$ through $Q$). For each valid $i$, the $i$-th request is for the lift to move from its current floor to a source floor $f_i$, where some people enter the lift, and then move to a destination floor $d_i$, where they exit the lift. The lift should not stop anywhere in between moving to the floor $f_i$ or from the floor $f_i$ to the floor $d_i$. The lift must serve the requests sequentially, i.e. completely fulfill request $1$, then request $2$ and so on. The lift does not move anywhere after serving the final request.

Find the total number of floors the lift needs to travel to fulfill all the requests.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains two space-separated integers $N$ and $Q$.
- The following $Q$ lines describe requests. For each valid $i$, the $i$-th of these lines contains two space-separated integers $f_i$ and $d_i$.

### Output
For each test case, print a single line containing one integer ― the total number of floors travelled by the lift.

### Constraints
- $1 \le T \le 250$
- $1 \le N \le 10^6$
- $1 \le Q \le 10^5$
- $0 \le f_i, d_i \le N$ for each valid $i$
- $f_i \neq d_i$ for each valid $i$
- the sum of $Q$ over all test cases does not exceed $10^5$

### Example Input
```
1
2 3
1 2
0 1
1 0

```

### Example Output
```
6
```

### Explanation
**Example case 1:** The lift travels $2$ floors up to serve the first request, $3$ floors ($2$ down, then $1$ up) to serve the second request and $1$ floor down to serve the third request. Note that in this case, the lift returned to the ground floor, but it may end up at any floor.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>