---
{"category_name":"medium","problem_code":"FLY","problem_name":"Fly-overs","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TCL","44":"TEXT","45":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"shettynamit","problem_tester":"anton_lunyov","date_added":"21-04-2012","tags":{"0":"functions","1":"graphs","2":"june12","3":"medium","4":"shettynamit"},"editorial_url":"http://discuss.codechef.com/problems/FLY","time":{"view_start_date":1339403674,"submit_start_date":1339403674,"visible_start_date":1339407000,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The Head Chef has opened <b>N</b> new restaurants across the city. But he is exhausted since he has to travel so much when he has to go from one restaurant to another. Further, the city traffic is driving him crazy. So he wishes to construct fly-overs between restaurants. A fly-over is a road at a raised height between any two restaurants. If two restaurants are connected by a fly-over, it takes only <b>1</b> second for the Chef to move from one restaurant to the other. When commuting between restaurants, our Head Chef wishes to use one or more fly-overs. <i>He doesn't want to travel by the regular roads at all</i>.</p>

<p>Unfortunately, construction of fly-overs costs money. A construction company has agreed to build <b>1</b> fly-over for a payment of <b>C</b> rupees. It is up to the Chef to decide which restaurants he wants to connect using fly-overs. He asks his assistant chefs to give him suggestions. Each assistant chef proposes his own model. The Chef is now confused, he has no way of comparing models. Some models have too many fly-overs, while other models have too few.</p>

<p>The Sous Chef came up with a formula to estimate the <b>Cost of a model</b>. Suppose the model has <b>F</b> fly-overs. Let's label restaurants by numbers <b>1</b>, <b>2</b>, ..., <b>N</b>. Let <b>T(U, V)</b> represents the time taken to go from the restaurant <b>U</b> to the restaurant <b>V</b> via fly-overs of the current model. Compute <b>T(X, Y)</b> for every ordered pair of distinct restaurants <b>(X, Y)</b> (<b>N ∙ (N – 1) </b> pairs in total) and then add them up. Denote obtained sum as <b>P</b> and called it the time penalty of the model. Note that the constructing of <b>F</b> fly-overs will cost <b>C</b> ∙ <b>F</b> rupees. The Sous Chef strongly believes that saving time is equivalent to saving money, so the total cost of the model is simply <b>P</b> + <b>C</b> ∙ <b>F</b>.</p>

<p>The Head Chef is somewhat satisfied. As a specialist in math and graph theory he immediately found a formula for the cost of the optimal model for a given <b>C</b>. But the construction company has a special offer now. It can construct fly-overs between <b>M</b> special pairs of restaurants for free. Now the problem of finding the optimal model becomes non-trivial for The Chef and he turns to you for help.</p>

<h3>Input</h3>
<p>The first line of the input file contains an integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains an integer <b>N</b>, a real <b>C</b> and an integer <b>M</b>. Here <b>N</b> is the number of restaurants, <b>C</b> is the cost of the constructing of one fly-over, and <b>M</b> is the number of special pairs of restaurants. Each of the next <b>M</b> lines contains two integers <b>U</b> and <b>V</b>, the indexes of the restaurants that can be connected by the fly-over for free. Each pair of consecutive numbers in every line is separated by exactly one space.</p>

<h3>Output</h3>
<p>For each test case output a single value, the minimum possible cost of a model. Output this value with exactly <b>9</b> digits after the decimal point. Your answer will be considered as correct if it has an absolute error less than <b>10<sup>-12</sup></b>.</p>

<h3>Constraints</h3>
<p><b>1</b> ≤ <b>T</b> ≤ <b>1000</b>
</p><p><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>9</sup></b>
</p><p><b>0</b> ≤ <b>C</b> ≤ <b>10<sup>9</sup></b>
</p><p><b>C</b> either will be an integer or will have at most <b>9</b> digits after the decimal point.
</p><p><b>0</b> ≤ <b>M</b> ≤ <b>2</b>
</p><p><b>1</b> ≤ <b>U</b>, <b>V</b> ≤ <b>N</b>
</p><p><b>U</b> ≠ <b>V</b>
</p><p>All <b>M</b> unordered pairs <b>{U, V}</b> will be different.
</p><p><b>Note</b>: Just to re-iterate, the cost of a model is not simply the cost of constructing the fly-overs. Refer to the Sous Chef's definition of "Cost of a model" in the problem statement.


<h3>Example</h3>

<pre>
<b>Input:</b>
3
3 1.500 0
2 18.92 0
3 3.141592653 1
1 2
1 47 0

<b>Output:</b>
10.500000000
20.920000000
11.141592653
0.000000000
</pre>

<h3>Explanation</h3>

</p><p><b>Case 1.</b> We will compare two models: <b>M<sub>1</sub></b> and <b>M<sub>2</sub></b>. We will denote a fly-over that connects the restaurants with indexes <b>U</b> and <b>V</b> by <b>[U, V]</b>.</p>
<p>In the model <b>M<sub>1</sub></b> we have two fly-overs: <b>[1, 2]</b> and <b>[1, 3]</b>. Clearly, <b>T(1, 2) = T(2, 1) = 1</b> and <b>T(1, 3) = T(3, 1) = 1</b> while <b>T(2, 3) = T(3, 2) = 2</b> since traveling from <b>2</b> to <b>3</b> (and vice versa) requires traversing of two fly-overs. Thus, the time penalty is <b>1+1+1+1+2+2 = 8</b> seconds, while the cost of the fly-overs constructing is <b>2 ∙ 1.5 = 3</b> rupees. Hence, the total cost is <b>8 + 3 = 11</b>.</p>
<p>Now let's consider the model <b>M<sub>2</sub></b> which has 3 fly-overs: <b>[1, 2]</b>, <b>[2, 3]</b> and <b>[1, 3]</b>. Clearly, <b>T(X, Y) = 1</b> for every ordered pair <b>(X, Y)</b> of the restaurants. Thus, the time penalty is <b>1+1+1+1+1+1 = 6</b> seconds, while the cost of the fly-overs constructing is <b>3 ∙ 1.5 = 4.5</b> rupees. Hence, the total cost is <b>6 + 4.5 = 10.5</b> which is smaller than that of <b>M<sub>1</sub></b>. It can be shown that no model has a cost smaller than <b>10.5</b>.</p>

<p><b>Case 2.</b> Recall that the Chef wishes to travel only via fly-overs. In the case of <b>2</b> restaurants, there obviously has to be a fly-over between them. So the cost is <b>T(1, 2) + T(2, 1) + 1 ∙ 18.92 = 1 + 1 + 18.92 = 20.92</b>.</p>

<p><b>Case 3.</b> The optimal model here has fly-overs <b>[1, 2]</b> and <b>[1, 3]</b>. But since the first fly-over will be constructed for free, the total cost is <b>8 + 1 ∙ 3.141592653 = 11.141592653</b>.</p>

<p><b>Case 4.</b> Note that <b>C</b> here is represented without decimal point. Clearly, when the Head Chef has only one restaurant he doesn't need to travel at all and construct fly-overs. Hence the optimal model is an empty model that has zero total cost.</p>