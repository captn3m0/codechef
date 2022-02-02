---
{"category_name":"school","problem_code":"SAFEROBO","problem_name":"Safe Robots","problemComponents":{"constraints":"","constraintsState":false,"subtasks":"","subtasksState":false,"inputFormat":"","inputFormatState":false,"outputFormat":"","outputFormatState":false,"sampleTestCases":{}},"video_editorial_url":"","languages_supported":{"0":"CPP14","1":"C","2":"JAVA","3":"PYTH 3.6","4":"PYTH","5":"PYP3","6":"CS2","7":"ADA","8":"PYPY","9":"TEXT","10":"PAS fpc","11":"NODEJS","12":"RUBY","13":"PHP","14":"GO","15":"HASK","16":"TCL","17":"PERL","18":"SCALA","19":"LUA","20":"kotlin","21":"BASH","22":"JS","23":"LISP sbcl","24":"rust","25":"PAS gpc","26":"BF","27":"CLOJ","28":"R","29":"D","30":"CAML","31":"FORT","32":"ASM","33":"swift","34":"FS","35":"WSPC","36":"LISP clisp","37":"SQL","38":"SCM guile","39":"PERL6","40":"ERL","41":"CLPS","42":"ICK","43":"NICE","44":"PRLG","45":"ICON","46":"COB","47":"SCM chicken","48":"PIKE","49":"SCM qobi","50":"ST","51":"NEM"},"max_timelimit":1,"source_sizelimit":50000,"problem_author":"dpraveen_adm","problem_tester":null,"date_added":"14-12-2019","tags":{"0":"dpraveen_adm"},"problem_difficulty_level":"Simple","best_tag":"","editorial_url":"https://discuss.codechef.com/problems/SAFEROBO","time":{"view_start_date":1576781100,"submit_start_date":1576781100,"visible_start_date":1576781100,"end_date":1735669800},"is_direct_submittable":false,"problemDiscussURL":"https://discuss.codechef.com/search?q=SAFEROBO","is_proctored":false,"visitedContests":{},"layout":"problem"}
---
There are two robots, one belonging to Alice, and the other to Bob. These robots are currently standing in a lane. You are given this information by a string $s$, whose characters are either '.' denoting empty cell, 'A' denoting Alice's robot, or 'B' denoting Bob's robot. We guarantee that Alice's robot lies to the left of Bob's robot.

You are given two integers $sa$, and $sb$. Alice's robot moves to the right, and in a single step it jumps $sa$ cells to the right. Whereas Bob's robot moves to the left, and in a single step it jumps $sb$ cells to the left. Both robots take 1 step per second. If initially, Alice's robot was at index 5, and $sa=4$, then after 1 second, Alice's robot would be at index 9. Note that it does not go to cells in between. It directly jumps to cell 9. Also note that the robots don't step out of the given cells, i.e., they stop moving if the next step they take is out of the cells. And once some robot stops moving, **the entire simulation stops**, and the other robot also stops moving.

Find whether at any point of time, the robots will land on the same cell or not. If they fall into the same cell, they will collide with each other, and it will create an unsafe undesired situation.

###Input:

- The first line will contain an integer $T$, denoting the number of test cases. Then the test cases follow.
- The first line of each test case contains a string $s$.
- The second line of each test case contains two space-separated integers $sa, sb$.

###Output:
For each test case, output "safe" if there is no point in time, when the robots collide with each other. Otherwise print "unsafe".

###Constraints
- $1 \leq T \leq 10$
- $1 \leq |s| \leq 10^5$
- $1 \leq sa, sb \leq |s|$

###Sample Input:
    2
    A..B
    1 1
    A...B
    1 1

###Sample Output:
    safe
    unsafe

###Explanation
- In the first test case, at no point in time, A and B will collide with each other. Thus, it is a safe situation.
- In the second test case, at t=2 second, A and B will both be at the 3-rd index (1-based indexing). Thus it is unsafe.

<aside style='background: #f8f8f8;padding: 10px 15px;'><div>All submissions for this problem are available.</div></aside>