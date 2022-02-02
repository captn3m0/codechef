---
{"category_name":"school","problem_code":"RECIPE","problem_name":"Cutting Recipes","languages_supported":{"0":"ADA","1":"ASM","2":"BASH","3":"BF","4":"C","5":"C99 strict","6":"CAML","7":"CLOJ","8":"CLPS","9":"CPP 4.3.2","10":"CPP 4.9.2","11":"CPP14","12":"CS2","13":"D","14":"ERL","15":"FORT","16":"FS","17":"GO","18":"HASK","19":"ICK","20":"ICON","21":"JAVA","22":"JS","23":"LISP clisp","24":"LISP sbcl","25":"LUA","26":"NEM","27":"NICE","28":"NODEJS","29":"PAS fpc","30":"PAS gpc","31":"PERL","32":"PERL6","33":"PHP","34":"PIKE","35":"PRLG","36":"PYTH","37":"PYTH 3.4","38":"RUBY","39":"SCALA","40":"SCM guile","41":"SCM qobi","42":"ST","43":"TEXT","44":"WSPC"},"max_timelimit":2,"source_sizelimit":50000,"problem_author":"pieguy","problem_tester":"friggstad","date_added":"12-11-2010","tags":{"0":"cook04","1":"easy","2":"pieguy"},"editorial_url":"http://discuss.codechef.com/problems/RECIPE","time":{"view_start_date":1290883955,"submit_start_date":1290883955,"visible_start_date":1290884136,"end_date":1735669800},"layout":"problem"}
---
<span class="solution-visible-txt">All submissions for this problem are available.</span><p>The chef has a recipe he wishes to use for his guests,
but the recipe will make far more food than he can serve to the guests.
The chef therefore would like to make a reduced version of the recipe which has the same ratios of ingredients, but makes less food.
The chef, however, does not like fractions.
The original recipe contains only whole numbers of ingredients,
and the chef wants the reduced recipe to only contain whole numbers of ingredients as well.
Help the chef determine how much of each ingredient to use in order to make as little food as possible.</p>

<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.
Each test case consists of a single line.
The line begins with a positive integer N, the number of ingredients.
N integers follow, each indicating the quantity of a particular ingredient that is used.</p>

<h3>Output</h3>
<p>For each test case, output exactly N space-separated integers on a line,
giving the quantity of each ingredient that the chef should use in order to make as little food as possible.</p>

<h3>Sample Input</h3>
<pre>3
2 4 4
3 2 3 4
4 3 15 9 6
</pre>

<h3>Sample Output</h3>
<pre>1 1
2 3 4
1 5 3 2
</pre>

<h3>Constraints</h3>
T&le;100<br />
2&le;N&le;50<br />
All ingredient quantities are between 1 and 1000, inclusive.