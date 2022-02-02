---
{"category_name":"easy","problem_code":"CAPTBIRD","problem_name":"Capturing Bird in A Camera","languages_supported":{"0":"C","1":"CPP14","2":"JAVA","3":"PYTH","4":"PYTH 3.6","5":"PYPY","6":"CS2","7":"PAS fpc","8":"PAS gpc","9":"RUBY","10":"PHP","11":"GO","12":"NODEJS","13":"HASK","14":"rust","15":"SCALA","16":"swift","17":"D","18":"PERL","19":"FORT","20":"WSPC","21":"ADA","22":"CAML","23":"ICK","24":"BF","25":"ASM","26":"CLPS","27":"PRLG","28":"ICON","29":"SCM qobi","30":"PIKE","31":"ST","32":"NICE","33":"LUA","34":"BASH","35":"NEM","36":"LISP sbcl","37":"LISP clisp","38":"SCM guile","39":"JS","40":"ERL","41":"TCL","42":"kotlin","43":"PERL6","44":"TEXT","45":"SCM chicken","46":"PYP3","47":"CLOJ","48":"COB","49":"FS"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"admin2","problem_tester":null,"date_added":"13-12-2018","tags":{"0":"admin2"},"time":{"view_start_date":1545157800,"submit_start_date":1545157800,"visible_start_date":1545157800,"end_date":1735669800},"is_direct_submittable":false,"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span>Nature photographing may be fun for tourists, but it is one of the most complicated things for photographers. To capture all the facets of a bird, you might need more than one cameras. You recently encountered such a situation.

There are $n$ photographers, so there are $n$ cameras in a line on the x-axis. All the cameras are at distinct coordinates. 

You want to pair up these cameras ($n$ is even) in such a way that the sum of angles subtended on the bird by the pair of cameras is maximized. Formally, let A, B be two cameras, and let P be the bird to be captured by these two cameras. The angle will APB. 

Note: All angles are in radians.

### Input
- The first line of the input contains an integer $T$ denoting the number of test cases. The description of the test cases follows.
- The first line of each test case contains an integer $n$.
- The second line of each test case contains $n$ space-separated integers denoting the $x_i$ coordinates of the cameras.
- The third line of each test case contains two space-separated integers $P, Q$ denoting the x and y coordinates of the bird respectively.

### Output
For each test case, output your answer in a single line. Your answer would be considered correct if its absolute error is less than or equal to 1e-6 of the actual answer. 

###Constraints
- $1 \le T \le 10$
- $2 \le n \leq  100$
- $1 \le x_i \leq 300$
- $0 \le P \leq 300$
- $1 \le Q \leq 300$

### Example Input
```
2
2
0 1
0 1
2
0 1
100 1
```

### Example Output
```
0.785398163397
0.000100999899
```

###Explanation
**Note**: $1 \leq x_i$ is not being satisfied by the sample input, but will be satisfied in the actual test data.

**Testcase 1**: There are only 2 cameras, so they have to paired up with each other. And the angle subtended by then is 45 degrees. Converting this to radians gives the output.