---
{"category_name":"school","problem_code":"CCBTS02","problem_name":"Memcached Service","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"CPP17","5":"PYTH","6":"PYP3","7":"CS2","8":"ADA","9":"PYPY","10":"TEXT","11":"PAS fpc","12":"NODEJS","13":"RUBY","14":"PHP","15":"GO","16":"HASK","17":"TCL","18":"PERL","19":"SCALA","20":"LUA","21":"kotlin","22":"BASH","23":"JS","24":"LISP sbcl","25":"rust","26":"PAS gpc","27":"BF","28":"CLOJ","29":"R","30":"D","31":"CAML","32":"FORT","33":"ASM","34":"swift","35":"FS","36":"WSPC","37":"LISP clisp","38":"SQL","39":"SCM guile","40":"PERL6","41":"ERL","42":"CLPS","43":"ICK","44":"NICE","45":"PRLG","46":"ICON","47":"COB","48":"SCM chicken","49":"PIKE","50":"SCM qobi","51":"ST","52":"SQLQ","53":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":"","date_added":"5-08-2018","tags":{"0":"admin3"},"problem_difficulty_level":"Unavailable","best_tag":"","editorial_url":"","time":{"view_start_date":1104528600,"submit_start_date":1104528600,"visible_start_date":1104528600,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=CCBTS02","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef is a programmer. In his computer, he is running a caching service, Memcached. He can give the commands "start", "restart" or "stop" to the service, the functionalities of which are specified below.

- "start": Start the service.
- "restart": If the service is started, do nothing. Otherwise, start the service.
- "stop": If the service is not running, give an error. Otherwise, stop the service.

The service is initially not running. You are given $n$ commands that he then gives to the program in sequence. Your task is to identify whether some error/s were encountered while running these commands.

###Input
- The first line of each test case contains an integer $T$ denoting the number of test cases. The description of $T$ test cases follows.
- The first line of each test case contains an integer $n$, denoting the number of commands.
- The next line contains $n$ space separated strings, each of which is either "start", "restart" or "stop".

###Output
For each test case, output "404" if some error occurred, otherwise output "200" (without quotes).

###Constraints
- $1 \le T \le 100$
- $1 \le n \le 10$

### Sample Input
```
5
2
start stop
2
restart stop
3
start restart stop
3
start stop stop
1
stop
```

### Sample Output
```
200
200
200
404
404

```

### Explanation
- In the first, second and third cases, there won't be any error.
- In the fourth case, when you execute the third command, the service is already stopped. So, it will result in an error.
- In the fifth case, you are trying to stop the service when it's not even started, and will hence result in an error.
<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>