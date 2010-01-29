`{exp:nsm_if_addon_installed}`
=============================

A simple ExpressionEngine 2.0 plugin that checks if an addon (plugin or module) is installed.

Getting started
-------------

### Requirements

NSM Addon conditional is an ExpressionEngine 2.0 plugin.

Technical requirements include:

* [ExpressionEngine 2.0][ee]
* [PHP5][php]

### Installation

1. Download the latest version of NSM addon conditional
2. Extract the .zip file to your desktop
3. Copy `system/expressionengine/third_party/nsm_if_addon_installed` to `system/expressionengine/third_party/`

User guide
---------

NSM Addon conditional provides a simple mechanism for detecting if a plugin or module is installed. This is useful for adding functionality to your ExpressionEngine theme depending on wether a plugin or module is installed.

The following example tests if the pages module is installed:

    {exp:nsm_if_addon_installed addon="pages"}
    	{if no_results}The pages module is not installed.{/if}
    	The pages module is installed
    {/exp:nsm_if_addon_installed}

Release Notes
------------

### Change log

#### 1.0.0

* Initial release w/ documentation

Support
-------

Technical support is available primarily through the [ExpressionEngine forums][ee_forums]. [Leevi Graham][lg] and [Newism][nsm] do not provide direct phone support. No representations or guarantees are made regarding the response time in which support questions are answered.

Although we are actively developing this addon, [Leevi Graham][lg] and [Newism][nsm] makes no guarantees that it will be upgraded within any specific timeframe.

License
------

Ownership of this software always remains property of the author.

You may:

* Modify the software for your own projects
* Use the software on personal and commercial projects

You may not:

* Resell or redistribute the software in any form or manner without permission of the author
* Remove the license / copyright / author credits

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.

[lg]: http://leevigraham.com
[nsm]: http://newism.com.au
[ee]: http://expressionengine.com/index.php?affiliate=newism
[ee_forums]: http://expressionengine.com/index.php?affiliate=newism&page=forums
[php]: http://php.net