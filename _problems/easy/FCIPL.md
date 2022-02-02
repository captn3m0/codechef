---
{"category_name":"easy","problem_code":"FCIPL","problem_name":"IPL Begins","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"msi_cse_buet","problem_tester":null,"date_added":"5-12-2019","tags":{"0":"msi_cse_buet"},"problem_difficulty_level":"Easy","best_tag":"","editorial_url":"","time":{"view_start_date":1578249000,"submit_start_date":1578249000,"visible_start_date":1578249000,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=FCIPL","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
This year $p$ footballers and $q$ cricketers have been invited to participate in IPL (Indian Programming League) as guests. You have to accommodate them in $r$ rooms such that-
- No room may remain empty.
- A room may contain either only footballers or only cricketers, not both.
- No cricketers are allowed to stay alone in a room.

Find the number of ways to place the players. Note though, that all the rooms are identical. But each of the cricketers and footballers are unique. 

Since the number of ways can be very large, print the answer modulo $998,244,353$.

### Input
- The first line of the input contains a single integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first and only line of each test case contains three space-separated integers $p$, $q$ and $r$ denoting the number of footballers, cricketers and rooms.

### Output
For each test case, output the number of ways to place the players modulo $998,244,353$.

### Constraints 
- $1 \le T \le 100$
- $1 \le p, q, r \le 100$

### Example Input
```
4
2 1 4
2 4 4
2 5 4
2 8 4
```

### Example Output
```
0
3
10
609
```

### Explanation
**Example case 2:** Three possible ways are:
- {Footballer 1}, {Footballer 2}, {Cricketer 1, Cricketer 2}, {Cricketer 3, Cricketer 4}
- {Footballer 1}, {Footballer 2}, {Cricketer 1, Cricketer 3}, {Cricketer 2, Cricketer 4}
- {Footballer 1}, {Footballer 2}, {Cricketer 1, Cricketer 4}, {Cricketer 2, Cricketer 3}    

Please note that the rooms are identical.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>