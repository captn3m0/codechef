---
{"category_name":"school","problem_code":"MXCH","problem_name":"Dinosaurs Football","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"https://youtu.be/985YHiqk6W8","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"alei","problem_tester":"","date_added":"24-10-2019","tags":{"0":"alei","1":"cnmp2019","2":"pattern","3":"simple","4":"taran_1407"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/MXCH","time":{"view_start_date":1573313400,"submit_start_date":1573313400,"visible_start_date":1573313400,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=MXCH","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
Chef Ada is the FootBall coach of the Dinosaurs Institute of Technology.

There are $N$ dinosaurs (enumerated $1$ through $N$) placed in a line. The i-th dinosaur has a height of $i$ meters.

Ada is training The dinosaurs in the following tactic:

- Initially the leftmost dinosaur has the ball.
- The dinosaur that has the ball passes the ball to the nearest dinosaur to the right that is tallest than him.
- The previous step continues until the ball reaches the tallest dinosaur, then he throws the ball and scores a goal!

Help Ada reordering the dinosaurs in such a way that the ball is passed from dinosaur to dinosaur exactly $K$ times.

For example, if there are $5$ dinosaurs ordered as $[2,3,1,5,4]$, then the ball goes $2 \rightarrow 3\rightarrow5 \rightarrow goal$, and the ball was passed two times.


###Input:

- First line will contain $T$, number of testcases.
- Each test case consist of a line with two space separated integers $N,K$.


###Output:
For each testcase, output in a single line conaining $N$ integers representing one possible ordering in which the dinosaurs can be placed.

###Constraints 

- $1 \leq T \leq 2^8$
- $2 \leq N \leq 20$
- $0 \leq K \leq N-1$

###Sample Input:
```
1
5 2
```
###Sample Output:
```
2 3 1 5 4
```

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>