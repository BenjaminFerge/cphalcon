
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/object.h"
#include "kernel/operators.h"
#include "kernel/exception.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/memory.h"


/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */
/**
 * Phalcon\Acl\Operation
 *
 * This class defines operation entity and its description
 */
ZEPHIR_INIT_CLASS(Phalcon_Acl_Operation) {

	ZEPHIR_REGISTER_CLASS(Phalcon\\Acl, Operation, phalcon, acl_operation, phalcon_acl_operation_method_entry, 0);

	/**
	 * Operation name
	 * @var string
	 */
	zend_declare_property_null(phalcon_acl_operation_ce, SL("_name"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * Operation description
	 * @var string
	 */
	zend_declare_property_null(phalcon_acl_operation_ce, SL("_description"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_class_implements(phalcon_acl_operation_ce TSRMLS_CC, 1, phalcon_acl_operationinterface_ce);
	return SUCCESS;

}

/**
 * Operation name
 */
PHP_METHOD(Phalcon_Acl_Operation, getName) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "_name");

}

/**
 * Operation name
 */
PHP_METHOD(Phalcon_Acl_Operation, __toString) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "_name");

}

/**
 * Operation description
 */
PHP_METHOD(Phalcon_Acl_Operation, getDescription) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "_description");

}

/**
 * Phalcon\Acl\Operation constructor
 */
PHP_METHOD(Phalcon_Acl_Operation, __construct) {

	zval *name_param = NULL, *description_param = NULL;
	zval name, description;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&description);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &name_param, &description_param);

	if (UNEXPECTED(Z_TYPE_P(name_param) != IS_STRING && Z_TYPE_P(name_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'name' must be of the type string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(name_param) == IS_STRING)) {
		zephir_get_strval(&name, name_param);
	} else {
		ZEPHIR_INIT_VAR(&name);
		ZVAL_EMPTY_STRING(&name);
	}
	if (!description_param) {
		ZEPHIR_INIT_VAR(&description);
		ZVAL_STRING(&description, "");
	} else {
		zephir_get_strval(&description, description_param);
	}


	if (ZEPHIR_IS_STRING(&name, "*")) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(phalcon_acl_exception_ce, "Operation name cannot be '*'", "phalcon/acl/operation.zep", 40);
		return;
	}
	zephir_update_property_zval(this_ptr, SL("_name"), &name);
	if (!(Z_TYPE_P(&description) == IS_UNDEF) && Z_STRLEN_P(&description)) {
		zephir_update_property_zval(this_ptr, SL("_description"), &description);
	}
	ZEPHIR_MM_RESTORE();

}

