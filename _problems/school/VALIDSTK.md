---
{"category_name":"school","problem_code":"VALIDSTK","problem_name":"Valid Stack Operations","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin3","problem_tester":null,"date_added":"21-12-2018","tags":{"0":"admin3"},"time":{"view_start_date":1545503400,"submit_start_date":1545503400,"visible_start_date":1545503400,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>You have a stack which is initially empty. You receive instructions of the form 1 or 0. 1 denotes that you have to push in an element, and 0 denotes that you have to pop out an element. But of course you can pop something out only if it exists in the stack. So your job is to look at the instructions and see if they are valid (ie. you never have to pop from an empty stack), or not.

###Input
- The first line of the input contains a single integers $T$, which denotes the number of testcases.
- The first line of each testcase contains a single integer $n$, which denotes the number of instructions.
- The second line contains $n$ space separated integers, which are all 0 or 1.

###Output
- For each testcase output either "Valid" or "Invalid", in a new line.

###Constraints
- $1 \leq T \leq 10$
- $1 \leq n \leq 10^5$
- All instructions are either 0 or 1.

###Sample Input
```
2
5
1 1 0 0 1
5
1 0 0 1 1
```

###Sample Output
```
Valid
Invalid
```

###Explanation
**Testcase 2**: You first push something, and then pop it out. So now you have an empty stack, but the next operation is a Pop, and hence this is Invalid.